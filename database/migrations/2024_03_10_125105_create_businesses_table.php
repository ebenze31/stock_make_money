<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->text('detail')->nullable();
            $table->string('photo')->nullable();
            $table->string('host')->nullable();
            $table->string('member')->nullable();
            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
            $table->float('income')->nullable();
            $table->float('expenses')->nullable();
            $table->float('total_cost')->nullable();
            $table->string('status')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('businesses');
    }
}
