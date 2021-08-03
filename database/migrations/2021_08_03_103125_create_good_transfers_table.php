<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('good_transfers', function (Blueprint $table) {
            $table->id();
            $table->date('date_transfer')->nullable();
            $table->integer('warehouse_id')->nullable();
            $table->integer('stock_id')->nullable();
            $table->bigInteger('qty')->nullable();
            $table->integer('change_warehouse_id')->nullable();
            $table->string('user_id')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('good_transfers');
    }
}
