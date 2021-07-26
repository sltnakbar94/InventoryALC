<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSoftdeletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoice', function(Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('invoice_detail', function(Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoice' ,function(Blueprint $table){
            $table->dropColumn([
                'deleted_at',
            ]);
        });
        Schema::table('invoice_detail' ,function(Blueprint $table){
            $table->dropColumn([
                'deleted_at',
            ]);
        });
    }
}
