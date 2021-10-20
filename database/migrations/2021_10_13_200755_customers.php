<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email")->unique();
            $table->string("password");
            $table->string('google_id')->nullable();
            $table->string('fb_id')->nullable();
            $table->string("phone")->nullable();
            $table->string("country")->nullable();
            $table->string("city")->nullable();
            $table->string("address_1")->nullable();
            $table->string("address_2")->nullable();
            $table->string("zip")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
