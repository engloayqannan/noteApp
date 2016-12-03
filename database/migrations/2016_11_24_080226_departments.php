<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Departments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('department_name',50);
            $table->float('department_key_gpa',4,2);
            $table->float('department_credit_normal',3,1);
            $table->float('department_credit_tr',3,1);
            $table->float('department_fail',4,2);
            $table->integer('department_grade');
            $table->float('department_zero_limit',4,2);
            $table->string('department_name_en',50);
			$table->string('active',1)->defualt('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
