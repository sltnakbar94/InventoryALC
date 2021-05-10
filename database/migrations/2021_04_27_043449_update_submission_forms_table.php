<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSubmissionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('submission_forms', function(Blueprint $table) {
            $table->string('form_number')->nullable()->change();
            $table->string('perusahaan');
            $table->string('uploadref')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('submission_forms', function (Blueprint $table) {
            $table->dropColumn([
                'form_number',
                'perusahaan',
                'uploadref',
            ]);
        });
    }
}
