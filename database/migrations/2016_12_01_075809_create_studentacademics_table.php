<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentacademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentacademics', function (Blueprint $table) {
            $table->integer('stdid');
            $table->integer('dept_id');
            $table->integer('major_id')->defualt('0');
            $table->integer('study_hours')->defualt('0');
            $table->integer('pass_hours')->defualt('0');
            $table->integer('plan_id');
            $table->integer('level')->defualt('1');
            $table->integer('credit_value');
            $table->integer('cgpa')->defualt('0.0');
            $table->increments('id');
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
        Schema::dropIfExists('studentacademics');
    }
}
