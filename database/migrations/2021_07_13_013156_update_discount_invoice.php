<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDiscountInvoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoice_detail' ,function(Blueprint $table){
            $table->dropColumn([
                'discount',
            ]);
        });
        Schema::table('invoice', function(Blueprint $table) {
            $table->double('invoice_value')->nullable()->default(0);
        });
        Schema::table('invoice_detail', function(Blueprint $table) {
            $table->double('discount')->nullable()->default(0);
            $table->double('price_after_discount')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoice_detail' ,function(Blueprint $table){
            $table->dropColumn([
                'discount',
            ]);
        });
        Schema::table('invoice' ,function(Blueprint $table){
            $table->dropColumn([
                'invoice_value',
            ]);
        });
    }
}
