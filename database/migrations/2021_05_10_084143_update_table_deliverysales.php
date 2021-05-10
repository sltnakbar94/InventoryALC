<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableDeliverysales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delivery_by_sales', function(Blueprint $table) {
            $table->string('ds_number')->nullable()->change();
            $table->string('perusahaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('delivery_by_sales', function(Blueprint $table) {
            $table->string('ds_number')->nullable(false)->change();
            $table->string('perusahaan');
        });

        Schema::table('delivery_notes' ,function(Blueprint $table){
            $table->dropColumn([
                'ds_number',
                'perusahaan'
            ]);
        });
    }
}
