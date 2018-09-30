<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemExceptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_exceptions', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('exception');
            $table->string('controller', 32);
            $table->string('method', 32);
            $table->integer('status');
            $table->unsignedInteger('user_id');
            $table->timestamps();

            // Keys
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('system_exceptions');
    }
}
