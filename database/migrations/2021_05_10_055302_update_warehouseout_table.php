<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateWarehouseoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('warehouse_outs', function(Blueprint $table) {
            $table->string('do_number')->nullable()->change();
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
        Schema::table('warehouse_outs' ,function(Blueprint $table){
            $table->dropColumn([
                'do_number',
                'perusahaan',
                'uploadref'
            ]);
        });
    }
}
