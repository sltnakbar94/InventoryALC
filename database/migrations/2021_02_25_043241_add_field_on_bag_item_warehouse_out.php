<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldOnBagItemWarehouseOut extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bag_item_warehouse_outs', function (Blueprint $table) {
            $table->float('price')->nullable();
            $table->double('discount')->nullable();
            $table->float('sub_total')->nullable();
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
            $table->dropColumn([
                'price',
                'discount',
                'sub_total'
            ]);
        });
    }
}
