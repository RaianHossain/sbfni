<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('grade_name')->nullable();
            $table->string('point')->nullable();
            $table->string('point_from')->nullable();
            $table->string('point_to')->nullable();
            $table->string('mark_from')->nullable();
            $table->string('mark_to')->nullable();
            $table->string('comment')->nullable();
            $table->string('grade_category_id')->nullable();
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
        Schema::dropIfExists('grades');
    }
}
