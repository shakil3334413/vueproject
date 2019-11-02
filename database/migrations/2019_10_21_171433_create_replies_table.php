<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            $table->bigIncrements('id',true);
            $table->text('body');
            $table->integer('user_id')->unsigned();
            $table->integer('question_id')->unsigned();
            $table->timestamps();
        });
        // Schema::table('replies', function($table) {
        //     $table->foreign('question_id')->references('id')->on('questions');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('replies');
    }
}
