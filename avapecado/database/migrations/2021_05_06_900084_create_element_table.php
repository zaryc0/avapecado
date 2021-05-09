<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('element', function (Blueprint $table) {
            $table->increments('id',true);
            $table->string('name');
            $table->string('description');
            $table->integer('img_id')->unsigned();
            $table->text('textContent')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
            $table->integer('page_id')->unsigned();
        });
        Schema::table('element', function ($table) {
            $table->foreign('page_id')->references('id')->on('page')->onDelete('cascade');
            $table->foreign('img_id')->references('id')->on('images')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('element');
    }
}
