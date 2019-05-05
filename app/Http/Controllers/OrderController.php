<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

use App\Book;
use App\User;
use App\Order;
use App\Orderlog;


class OrderController extends Controller
{
    //show all orders
    public function index(){
        $orders = Order::with(['user', 'books', 'order_logs'])->get();
        return $orders;
    }

    public function getOrderlogs(int $order_id){
        $orderlogs = Orderlog::where('order_id', $order_id)->get();
        return $orderlogs;
    }

    /**
     * @desc to find order by its ID
     * @param $id id of the order
     */
    public function getOrderById(int $id){
        $order = Order::where('id', $id)
            ->with(['user', 'books', 'order_logs'])
            ->first();
        return $order;
    }

    /**
     * @desc to find user by its ID
     * @param $userId userId we are searching for
     */
    public function findByUserId (int $userId) {
        $orders = Order::with(['user'])
            ->where('user_id', $userId)
            ->get();
        return $orders;
    }

    /**
     * @desc to find orders by their states
     * @param $name state we are searching for
     */
    public function findByState (number $state) {
        $orders = Order::with(['user', 'books'])
            ->where('state', 'LIKE',  $state)
            ->get();
        return $orders;
    }

    /**
     * @desc to find a user by its name
     * @param $name name of the user we search
     */
    public function findByUserName(string $name){
        $orders = Order::with(['user', 'books'])
            ->where('firstName', 'LIKE', '%'.$name.'%')
            ->orWhere('lastName', 'LIKE', '%'.$name.'%')
            ->get();
        return $orders;
    }

    /**
     * @desc updates the orderLog of an order and the state of an order
     * @param $request
     * @param $orderId to identify the order
     */
    public function updateOrder(Request $request, $orderId) : JsonResponse
    {
        DB::beginTransaction();
        try {
            $order = Order::with('order_logs')
                ->where('order_id', $orderId)->first();
            if ($order != null) {
                $request = $this->parseRequest($request);
                $order->update(['state' => $request['state']]);

                //update orderlog
                $orderlog = Orderlog::create(['description' => $request['description'],
                    'commentAdmin' => $request['commentAdmin'],
                    'state' => $request['state'],
                    'order_id' => $request['order_id'],
                    'user_id' => $request['user_id']]);
                $order->save();

            }
            DB::commit();
            // return a vaild http response
            return response()->json($order, 201);
        } catch (\Exception $e) {
            // rollback all queries
            DB::rollBack();
            return response()->json("updating orderLog failed: " . $e->getMessage(), 420);
        }
    }

    /**
     * @desc saves order to database
     * @param $request
     */
    public function saveOrder (Request $request) : JsonResponse{
        $request = $this->parseRequest($request);
        DB::beginTransaction();
        try {

            $order = Order::create($request->all());

            // save books
            if ($request['books'] && is_array($request['books'])) {
                foreach ($request['books'] as $book) {
                    $book = Book::firstOrNew([
                            'isbn' => $book['isbn'],
                            'title' => $book['title'],
                            'subtitle' => $book['subtitle'],
                            'published' => $book['published'],
                            'rating' => $book['rating'],
                            'description' => $book['description'],
                            'user_id' => $book['user_id'],
                            'nettoPrice' => $book['nettoPrice'],
                            'bruttoPrice' => $book['bruttoPrice']
                        ]
                    );

                    //weist Bücher den Orders in der Datenbank zu
                    $order->books()->save($book, ['price' => $book['bruttoPrice'],
                        'amount' => $book['amount'], 'title' => $book['title']]);
                }


                $orderlog = Orderlog::create(
                    ['state' => 0,
                        'description' => "Ihre Bestellung ist eingegangen!",
                        'commentAdmin' => null]
                );
                $order->order_logs()->save($orderlog);
            }

            $order->save();
            DB::commit();
            return response()->json($order, 201);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json('saving order failed' . $e->getMessage(), 420);
        }
    }

    private function parseRequest (Request $request) : Request {
        $date = new \DateTime($request->published);
        $request['published'] = $date;
        return $request;
    }
}
