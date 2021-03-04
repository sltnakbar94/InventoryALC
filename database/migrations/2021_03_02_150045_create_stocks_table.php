<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->integer('warehouse_id')->nullable();
            $table->integer('item_id')->nullable();
            $table->bigInteger('stock_on_hand')->default(0);
            $table->bigInteger('stock_on_location')->default(0);
            $table->bigInteger('stock_out_indent')->default(0);
            $table->bigInteger('stock_in_indent')->default(0);
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
        Schema::dropIfExists('stocks');
    }
}
