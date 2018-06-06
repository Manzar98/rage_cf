<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRfusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->float('age', 5, 2);
            $table->float('height', 5, 2);
            $table->float('weight', 5, 2);
            $table->float('chest', 5, 2);
            $table->string('rfcode');
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
        Schema::dropIfExists('rfusers');
    }
}
