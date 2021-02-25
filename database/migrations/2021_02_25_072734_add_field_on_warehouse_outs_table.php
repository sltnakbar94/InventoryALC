<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldOnWarehouseOutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('warehouse_outs', function (Blueprint $table) {
            $table->float('grand_total')->nullable();
            $table->string('term_of_payment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('warehouse_outs', function (Blueprint $table) {
            $table->dropColumn([
                'term_of_payment',
                'grand_total'
            ]);
        });
    }
}
