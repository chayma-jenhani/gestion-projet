<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCongeEmployeTable extends Migration {

	public function up()
	{
		Schema::create('conge_employe', function(Blueprint $table) {
			
			$table->integer('conge_id')->unsigned();
			$table->integer('employe_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('conge_employe');
	}
}