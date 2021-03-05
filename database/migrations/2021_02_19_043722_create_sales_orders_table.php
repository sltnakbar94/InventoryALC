<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            //General Data
            $table->string('so_number')->nullable();
            $table->date('so_date');
            $table->string('supplier_id');
            $table->string('customer_id');
            $table->string('ref_no')->nullable();
            $table->string('discount')->nullable();
            $table->boolean('ppn')->default(false);
            $table->bigInteger('grand_total')->nullable()->default(0);
            $table->text('term_of_paymnet')->nullable();
            $table->string('issued_by')->nullable();
            $table->string('approve_by')->nullable();
            $table->string('confirm_by')->nullable();
            $table->text('destination')->nullable();
            $table->text('description')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            //Add-on Data
            $table->string('pic_supplier')->nullable();
            $table->string('pic_customer')->nullable();
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
        Schema::dropIfExists('sales_orders');
    }
}
