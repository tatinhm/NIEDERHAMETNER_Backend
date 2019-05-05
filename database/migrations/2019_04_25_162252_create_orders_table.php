<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('nettoPrice')->default("0.00");
            $table->decimal('bruttoPrice')->default("0.00");
            $table->integer('state')->default("1");
            $table->string('userAddress')->default("home");
            $table->timestamps();
            $table->integer('user_id')->unsigned()->default('1');
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
