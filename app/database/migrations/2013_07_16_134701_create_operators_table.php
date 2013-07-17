<?php

use Illuminate\Database\Migrations\Migration;

class CreateOperatorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('operators', function($table)
        {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('name');
            $table->string('mobile');
            $table->string('email');
            // $table->integer('lv_id')->unsigned();
            $table->enum('lv', array('0', '1', '2'));
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
        Schema::drop('operators');
	}

}