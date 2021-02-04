<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarehouseInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouse_ins', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
            $table->string('code_transaction');
            $table->string('name');
            $table->string('brand');
            $table->string('unit');
            $table->integer('price');
            $table->integer('disc');
            $table->string('user_id');
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
        Schema::dropIfExists('warehouse_ins');
    }
}
