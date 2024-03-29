<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_values', function (Blueprint $table) {
            $table->bigIncrements( 'id');

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id') ->references('id')->on('products');

            $table->unsignedBigInteger('value_id');
            $table->foreign('value_id') ->references('id')->on('values');

            $table->integer('count');
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
        Schema::dropIfExists('product_values');
    }
}
