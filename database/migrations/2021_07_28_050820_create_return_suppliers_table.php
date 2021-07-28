<?php

use Doctrine\DBAL\Schema\Column;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_suppliers', function (Blueprint $table) {
            $table->id();
            $table->date('return_date')->nullable();
            $table->integer('item_id')->nullable();
            $table->string('warehouse_id')->nullable();
            $table->bigInteger('qty')->nullable();
            $table->string('driver_name')->nullable();
            $table->string('vehicle_registration_number')->nullable();
            $table->text('description')->nullable();
            $table->string('picture')->nullable();
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
        Schema::dropIfExists('return_suppliers');
    }
}
