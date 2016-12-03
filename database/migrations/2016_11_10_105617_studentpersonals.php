<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Studentpersonals extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentpersonals', function (Blueprint $table) {
            $table->string('first_name',20);
            $table->string('second_name',20);
            $table->string('third_name',20);
            $table->string('fourth_name',20);
            $table->string('first_name_en',20);
            $table->string('second_name_en',20);
            $table->string('third_name_en',20);
            $table->string('fourth_name_en',20);
            $table->integer('gender');
            $table->integer('stdid');
            $table->integer('ssn');
            $table->integer('mobile');
            $table->string('guardian',20);
            $table->string('guardian_type',20);
            $table->integer('guardian_mobile');
            $table->integer('home_phone');
            $table->string('email',40);
            $table->integer('bob');
            $table->date('dob');
            $table->integer('city');
            $table->integer('region');
            $table->string('street',100);
            $table->integer('health_state');
            $table->integer('social_state');
            $table->integer('religion');
            $table->integer('nationality');
            $table->string('password');
            $table->string('image',100);
            $table->char('status',1);
            $table->string('specialNeed',1);
            $table->string('knowabout',20);
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
        Schema::dropIfExists('studentpersonals');
    }
}
