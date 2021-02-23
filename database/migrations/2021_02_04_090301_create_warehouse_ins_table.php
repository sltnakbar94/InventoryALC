<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_ins', function (Blueprint $table) { //Purchase Order
            $table->bigIncrements('id');
            //General Data
            $table->string('po_number')->nullable();
            $table->date('po_date');
            $table->string('supplier_id');
            $table->string('ref_no')->nullable();
            $table->string('discount')->nullable();
            $table->boolean('ppn')->default(false);
            $table->string('grand_total')->nullable();
            $table->string('term_of_paymnet')->nullable();
            $table->string('issued_by')->nullable();
            $table->string('approve_by')->nullable();
            $table->string('confirm_by')->nullable();
            $table->text('description')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            //Add-on Data
            $table->string('pic_supplier')->nullable();
            $table->string('user_id');
            $table->bigInteger('company_id')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('warehouse_ins');
    }
}
