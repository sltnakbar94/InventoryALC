<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryBySalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_by_sales', function (Blueprint $table) {
            $table->id();
            $table->string('ds_number');
            $table->string('sales_order_id')->nullable();
            $table->date('ds_date')->nullable();
            $table->string('expedition')->nullable();
            $table->string('consignee')->nullable();//penerima barang
            $table->dateTime('etd')->nullable();
            $table->dateTime('eta')->nullable();
            $table->string('total_weight')->nullable();
            $table->string('plat_number')->nullable();
            $table->string('driver')->nullable();
            $table->string('driver_phone')->nullable();
            $table->string('module')->nullable();
            $table->integer('status')->default(0);
            $table->string('user_id')->nullable();
            $table->integer('company_id')->nullable();
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
        Schema::dropIfExists('delivery_by_sales');
    }
}
