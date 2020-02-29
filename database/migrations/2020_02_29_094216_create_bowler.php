<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBowler extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bowler', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('match_id')->unsigned()->index();
            $table->integer('over')->unsigned();
            $table->integer('maiden')->unsigned();
            $table->integer('run')->unsigned();
            $table->integer('wicket')->unsigned();
            $table->integer('econ')->unsigned();
            $table->integer('0s')->unsigned();
            $table->integer('4s')->unsigned();
            $table->integer('6s')->unsigned();
            $table->integer('wide_ball')->unsigned();
            $table->integer('no_ball')->unsigned();

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
        Schema::dropIfExists('bowler');
    }
}
