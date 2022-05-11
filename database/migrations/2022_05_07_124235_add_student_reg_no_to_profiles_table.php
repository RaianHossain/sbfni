<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStudentRegNoToProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            // $table->string('student_reg_no')->nullable();
            // $table->foreign('student_reg_no')->references('student_reg_no')->on('students')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {

            // $table->dropColumn('student_reg_no');
            // $table->dropForeign(['student_reg_no']);

        });
    }
}
