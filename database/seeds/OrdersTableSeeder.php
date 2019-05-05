<?php

use Illuminate\Database\Seeder;
use App\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = new \App\Order();
        $order->nettoPrice = "17";
        $order->bruttoPrice = "19.99";
        $order->state = "2";
        $order->userAddress = "3042 Würmla";
        $order->save();
        $user = App\User::where('firstName', 'Tatjana')->pluck("id");
        $order->user()->associate($user->first());
        $order->save();
        $book1 = App\Book::where('isbn', '28953563')->pluck("id");
        $order->books()->sync($book1->first());
        $order->save();

        $order2 = new \App\Order();
        $order2->nettoPrice = "17";
        $order2->bruttoPrice = "19.99";
        $order2->state = "3";
        $order2->userAddress = "3042 Würmla";
        $order2->save();
        $user2 = App\User::where('firstName', 'Petra')->pluck("id");
        $order2->user()->associate($user2->first());
        $order2->save();
        $book2 = App\Book::where('isbn', '23861578')->pluck("id");
        $order->books()->sync($book2->first());
        $order2->save();

        $order2 = new \App\Order();
        $order2->nettoPrice = "15";
        $order2->bruttoPrice = "17";
        $order2->state = "0";
        $order2->userAddress = "Kahlenbergstraße";
        $order2->save();
        $user2 = App\User::where('firstName', 'Petra')->pluck("id");
        $order2->user()->associate($user2->first());
        $order2->save();
        $book3 = App\Book::where('isbn', '27953181')->pluck("id");
        $order->books()->sync($book3->first());
        $order2->save();

    }
}
