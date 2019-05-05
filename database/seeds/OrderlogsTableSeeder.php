<?php

use Illuminate\Database\Seeder;

class OrderlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $log = new App\Orderlog();
        $log->state;
        $log->description = "Wir haben Ihre Bestellung erhalten!";
        $log->commentAdmin = "wird bearbeitet";
        $order = App\Order::where('id', 1)->pluck("id");
        $user = App\User::where('id', 1)->pluck("id");
        $log->order()->associate($order->first());
        $log->order()->associate($user->first());
        $log->save();

        $log = new App\Orderlog();
        $log->state = "1";
        $log->description = "Wir haben Ihre Zahlung erhalten!";
        $log->commentAdmin = "wird bearbeitet";
        $order = App\Order::where('id', 1)->pluck("id");
        $user = App\User::where('id', 1)->pluck("id");
        $log->order()->associate($order->first());
        $log->order()->associate($user->first());
        $log->save();

        $log = new App\Orderlog();
        $log->state = "2";
        $log->description = "Wir haben Ihre Bestellung versandt!";
        $log->commentAdmin = "erledigt";
        $order = App\Order::where('id', 1)->pluck("id");
        $user = App\User::where('id', 1)->pluck("id");
        $log->order()->associate($order->first());
        $log->order()->associate($user->first());
        $log->save();

        $log = new App\Orderlog();
        $log->state;
        $log->description = "Wir haben Ihre Bestellung erhalten!";
        $log->commentAdmin = "wird bearbeitet";
        $order = App\Order::where('id', 2)->pluck("id");
        $user = App\User::where('id', 2)->pluck("id");
        $log->order()->associate($order->first());
        $log->order()->associate($user->first());
        $log->save();

        $log = new App\Orderlog();
        $log->state = "1";
        $log->description = "Wir haben Ihre Zahlung erhalten!";
        $log->commentAdmin = "wird bearbeitet";
        $order = App\Order::where('id', 2)->pluck("id");
        $user = App\User::where('id', 2)->pluck("id");
        $log->order()->associate($order->first());
        $log->order()->associate($user->first());
        $log->save();

        $log = new App\Orderlog();
        $log->state = "3";
        $log->description = "Wir haben Ihre Bestellung storniert!";
        $log->commentAdmin = "storniert";
        $order = App\Order::where('id', 2)->pluck("id");
        $user = App\User::where('id', 2)->pluck("id");
        $log->order()->associate($order->first());
        $log->order()->associate($user->first());
        $log->save();

        $log = new App\Orderlog();
        $log->state = "0";
        $log->description = "Wir haben Ihre Bestellung erhalten!";
        $log->commentAdmin = "";
        $order = App\Order::where('id', 3)->pluck("id");
        $user = App\User::where('id', 2)->pluck("id");
        $log->order()->associate($order->first());
        $log->order()->associate($user->first());
        $log->save();


    }
}
