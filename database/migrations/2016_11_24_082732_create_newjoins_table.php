<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewjoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newjoins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique(); //field must be unique, and i dont recomend login by ID, use name instead
			$table->string('stdid')->unique(); //->default(1) u will have to delete the default after i show u
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::drop('newjoins');
    }
}
