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
            //General Data
            $table->string('do_number');
            $table->string('warehouse_in_id')->nullable();
            $table->date('date_out');
            $table->string('ref_no')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('pic')->nullable();
            $table->text('destination')->nullable();
            $table->text('description')->nullable();
            //Add-on Data
            $table->string('user_id');
            $table->bigInteger('company_id');
            $table->boolean('status')->default(true);
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
