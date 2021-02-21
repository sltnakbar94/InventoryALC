<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_order_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('sales_order_id');
            $table->string('item_id');
            $table->string('serial')->nullable();
            $table->bigInteger('price')->nullable();
            $table->bigInteger('qty');
            $table->bigInteger('qty_confirm')->nullable();
            $table->string('uom')->nullable();
            $table->integer('discount')->nullable();
            $table->bigInteger('sub_total')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('sales_order_details');
    }
}
