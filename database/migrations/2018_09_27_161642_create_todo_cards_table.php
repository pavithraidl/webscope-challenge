<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodoCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 64);
            $table->string('body', 512);
            $table->dateTime('due_date');
            $table->integer('status');
            $table->unsignedInteger('todo_column_id');
            $table->timestamps();

            // Keys
            $table->foreign('todo_column_id')->references('id')->on('todo_columns')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todo_cards');
    }
}
