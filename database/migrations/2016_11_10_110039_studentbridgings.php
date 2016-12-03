<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Studentbridgings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentbridgings', function (Blueprint $table) {
            $table->integer('stdid');
            $table->string('university_name',20);
            $table->integer('graduate_year');
            $table->string('college',20);
            $table->string('department',20);
            $table->float('gpa',4,2);
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
        Schema::dropIfExists('studentbridgings');
    }
}
