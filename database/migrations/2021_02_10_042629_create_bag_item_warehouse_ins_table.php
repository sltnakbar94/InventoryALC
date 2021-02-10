<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBagItemWarehouseInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bag_item_warehouse_ins', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('warehouse_ins_id')->unsigned();
            $table->bigInteger('item_id')->unsigned();
            $table->integer('qty');
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
        Schema::dropIfExists('bag_item_warehouse_ins');
    }
}
