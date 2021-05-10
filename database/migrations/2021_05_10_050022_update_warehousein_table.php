<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateWarehouseinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('warehouse_ins', function(Blueprint $table) {
            $table->string('po_number')->nullable()->change();
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
        Schema::table('warehouse_ins', function(Blueprint $table) {
            $table->string('po_number')->nullable(false)->change();
            $table->string('perusahaan');
            $table->string('uploadref')->nullable();
        });

        Schema::table('warehouse_ins' ,function(Blueprint $table){
            $table->dropColumn([
                'po_number',
                'perusahaan',
                'uploadref'
            ]);
        });
    }
}
