<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudenthighschoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studenthighschools', function (Blueprint $table) {
            $table->integer('stdid');
            $table->integer('high_school_id');
            $table->integer('high_school_branch');
            $table->float('high_school_gpa',4,2);
            $table->string('high_school_name',50);
            $table->integer('high_school_year');
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
        Schema::dropIfExists('studenthighschools');
    }
}
