<?php

use Doctrine\DBAL\Schema\Column;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodReceivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('good_receives', function (Blueprint $table) {
            $table->id();
            $table->string('dn_number')->nullable();
            $table->string('do_number')->nullable();
            $table->string('po_number')->nullable();
            $table->date('dn_date')->nullable();
            $table->string('sender')->nullable();
            $table->string('consignee')->nullable();//penerima barang
            $table->string('project_name')->nullable();
            $table->string('expedition')->nullable();
            $table->dateTime('etd')->nullable();
            $table->dateTime('eta')->nullable();
            $table->string('total_weight')->nullable();
            $table->string('plat_number')->nullable();
            $table->string('driver')->nullable();
            $table->string('driver_phone')->nullable();
            $table->string('module')->nullable();
            $table->integer('status')->default(0);
            $table->string('user_id')->nullable();
            $table->integer('company_id')->nullable();
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
        Schema::dropIfExists('good_receives');
    }
}
