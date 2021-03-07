<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmissionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submission_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            //General Data
            $table->string('form_number');
            $table->date('form_date');
            $table->string('ref_no')->nullable();
            $table->string('issued_by')->nullable();
            $table->string('approve_by')->nullable();
            $table->string('confirm_by')->nullable();
            $table->text('description')->nullable();
            $table->string('project_id');
            //Add-on Data
            $table->string('warehouse_id')->nullable();
            $table->string('project_name')->nullable();
            $table->string('user_id');
            $table->integer('company_id')->nullable();
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
        Schema::dropIfExists('submission_forms');
    }
}
