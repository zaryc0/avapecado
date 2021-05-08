<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->integer('offer_id')->unsigned();
            $table->foreign('offer_id')->references('id')->on('offer')->onDelete('cascade');;
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
