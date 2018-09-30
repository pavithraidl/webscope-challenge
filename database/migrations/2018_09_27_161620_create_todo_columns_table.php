<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodoColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todo_columns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 32);
            $table->string('icon', 16);
            $table->string('color', 8);
            $table->integer('status');
            $table->unsignedInteger('board_id');
            $table->timestamps();

            // Keys
            $table->foreign('board_id')->references('id')->on('todo_boards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todo_columns');
    }
}
