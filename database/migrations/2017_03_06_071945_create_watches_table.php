<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('shape')->nullable();
            $table->integer('size')->nullable();
            $table->string('bezel_material')->nullable();
            $table->string('band_material')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('price');
            $table->float('discount_price')->nullable();
            $table->integer('brand_id')->nullable();
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
        Schema::dropIfExists('watches');
    }
}
