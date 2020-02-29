<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatsman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batsman', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('match_id')->unsigned()->index();
            $table->integer('run')->unsigned()->nullable();
            $table->integer('ball')->unsigned()->nullable();
            $table->integer('4s')->unsigned()->nullable();
            $table->integer('6s')->unsigned()->nullable();
            $table->decimal('strike_rate')->nullable();

            $table->foreign('match_id')
                ->references('id')
                ->on('matches')
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batsman');
    }
}
