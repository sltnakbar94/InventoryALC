<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFlagToBagItemWarehouseIns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bag_item_warehouse_ins', function (Blueprint $table) {
            $table->set('flag', ['submit', 'decline', 'updated', 'accepted'])->default('submit');
            $table->integer('qty_confirm')->default(0);

            // know who changed the status from Warehouse
            $table->string('user_id')->default('192a6ff2-7f7f-48d9-a5bb-7229b3863fbf');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bag_item_warehouse_ins', function (Blueprint $table) {
            $table->dropColumn('flag');
            $table->dropColumn('user_id');
            $table->dropColumn('qty_confirm');
        });
    }
}
