<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_sales', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('lat');
            $table->string('lng');

            $table->string('schedule');
            $table->string('motto');
            $table->string('detail');
            
            $table->unsignedBigInteger('fridge_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('fridge_id')->references('id')->on('fridges')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('point_sales');
    }
};
