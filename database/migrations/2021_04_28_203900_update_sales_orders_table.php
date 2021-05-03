<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSalesOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales_orders', function(Blueprint $table) {
            $table->string('so_number')->nullable()->change();
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
        Schema::table('sales_orders', function(Blueprint $table) {
            $table->string('so_number')->nullable(false)->change();
            $table->string('perusahaan');
            $table->string('uploadref')->nullable();
        });
    }
}
