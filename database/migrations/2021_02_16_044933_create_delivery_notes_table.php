<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_notes', function (Blueprint $table) {
            $table->id();
            $table->string('dn_number');
            $table->string('reference')->nullable();
            $table->date('dn_date')->nullable();
            $table->string('expedition')->nullable();
            $table->string('consignee')->nullable();//penerima barang
            $table->dateTime('etd')->nullable();
            $table->dateTime('eta')->nullable();
            $table->bigInteger('total_weight')->nullable();
            $table->string('driver')->nullable();
            $table->string('driver_phone')->nullable();
            $table->string('module')->nullable();
            $table->integer('status')->default(0);
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('delivery_notes');
    }
}
