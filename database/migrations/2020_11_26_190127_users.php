<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { // Create users table with the following columns:
        // username, password, email, firstName, lastName
        Schema::create('users', function(Blueprint $table){
            $table->string("username");
            $table->string("password");
            $table->string("email");
            $table->string("firstName");
            $table->string("lastName");
            $table->increments("id");
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
        Schema::drop("users");

        // Drop table users if it already exists.
        Schema::dropIfExists("users");
    }
}