<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseOutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_outs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('delivery_note');
            $table->string('customer_id');
            $table->text('destination')->nullable();
            $table->date('date_out')->nullable();
            $table->text('description')->nullable();
            $table->string('user_id');
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
        Schema::dropIfExists('warehouse_outs');
    }
}
