<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnCustomerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_customer_details', function (Blueprint $table) {
            $table->id();
            $table->integer('return_customer_id')->nullable();
            $table->bigInteger('invoice_detail_id')->nullable();
            $table->integer('item_id')->nullable();
            $table->bigInteger('qty_before')->nullable();
            $table->bigInteger('qty')->nullable();
            $table->integer('item_change_id')->nullable();
            $table->bigInteger('qty_after')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('return_customer_details');
    }
}
