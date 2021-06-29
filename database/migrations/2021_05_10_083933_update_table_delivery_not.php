<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTableDeliveryNot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('delivery_notes', function(Blueprint $table) {
            $table->string('dn_number')->nullable()->change();
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
        Schema::table('delivery_notes' ,function(Blueprint $table){
            $table->dropColumn([
                'dn_number',
                'perusahaan'
            ]);
        });
    }
}
