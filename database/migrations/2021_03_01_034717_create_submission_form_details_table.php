<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmissionFormDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submission_form_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('submission_form_id');
            $table->bigInteger('item_id');
            $table->string('serial')->nullable();
            $table->bigInteger('qty')->nullable();
            $table->string('uom')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('submission_form_details');
    }
}
