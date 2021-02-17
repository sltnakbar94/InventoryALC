<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBagItemWarehouseOutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bag_item_warehouse_outs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('warehouse_outs_id')->unsigned();
            $table->bigInteger('item_id')->unsigned();
            $table->integer('qty');
            $table->bigInteger('price')->nullable();
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
        Schema::dropIfExists('bag_item_warehouse_outs');
    }
}
