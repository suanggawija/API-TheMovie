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
        Schema::create('moviegenres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movieid');
            $table->unsignedBigInteger('genreid');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('movieid')->references('id')->on('movies');
            $table->foreign('genreid')->references('id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('moviegenres');
    }
};
