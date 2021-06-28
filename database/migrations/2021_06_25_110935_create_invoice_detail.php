<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_detail', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('invoice_id');
            $table->string('item_id');
            $table->integer('qty');
            $table->integer('price');
            $table->integer('discount');
            $table->integer('price_sum');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_detail');
    }
}
