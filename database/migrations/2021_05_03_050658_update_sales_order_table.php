<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSalesOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_orders', function (Blueprint $table) {
            $table->string('so_number')->nullable(false)->change();
            $table->string('perusahaan');
            $table->string('uploadref')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('sales_orders', function (Blueprint $table) {
            $table->string('so_number')->nullable(false)->change();
            $table->string('perusahaan');
            $table->string('uploadref')->nullable();
        });
    }
}
