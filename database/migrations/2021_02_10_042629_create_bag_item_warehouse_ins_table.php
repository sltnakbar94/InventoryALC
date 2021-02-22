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
            $table->bigInteger('warehouse_in_id');
            $table->string('item_id');
            $table->string('serial')->nullable();
            $table->bigInteger('price')->nullable();
            $table->bigInteger('qty');
            $table->bigInteger('qty_confirm')->nullable();
            $table->string('uom')->nullable();
            $table->integer('discount')->nullable();
            $table->bigInteger('sub_total')->nullable();
            $table->integer('status')->default(0);
            $table->string('user_id')->nullable();
            $table->string('confirm_user_id')->nullable();
            $table->softDeletes();
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
