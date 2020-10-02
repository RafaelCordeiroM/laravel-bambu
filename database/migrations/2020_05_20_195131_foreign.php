<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Foreign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bambus', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('images');
        });
        Schema::table('cachepots', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('images');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('image_id')->references('id')->on('images');
        });
       
     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
