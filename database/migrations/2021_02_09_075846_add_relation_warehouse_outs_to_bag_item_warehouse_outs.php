<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationWarehouseOutsToBagItemWarehouseOuts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bag_item_warehouse_outs', function (Blueprint $table) {
            $table->foreign('warehouse_outs_id')->references('id')->on('warehouse_outs')
            ->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('item_id')->references('id')->on('items')
            ->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bag_item_warehouse_outs', function (Blueprint $table) {
            $table->dropForeign('bag_item_warehouse_outs_warehouse_outs_id_foreign');
            $table->dropForeign('bag_item_warehouse_outs_item_id_foreign');
        });
    }
}
