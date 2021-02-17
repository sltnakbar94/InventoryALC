<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCustomerOnWarehouseIns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('warehouse_ins', function (Blueprint $table) {
            $table->string('po_number')->nullable();
            $table->string('ppn')->nullable();
            $table->string('discount')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('destination')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('warehouse_ins', function (Blueprint $table) {
            $table->dropColumn([
                'po_number',
                'ppn',
                'discount',
                'customer_id',
                'destination',
            ]);
        });
    }
}
