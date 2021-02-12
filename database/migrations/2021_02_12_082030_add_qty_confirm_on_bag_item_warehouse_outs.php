<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddQtyConfirmOnBagItemWarehouseOuts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bag_item_warehouse_outs', function (Blueprint $table) {
            $table->integer('qty_confirm')->default(0);
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
            $table->dropColumn('bag_item_warehouse_outs');
        });
    }
}
