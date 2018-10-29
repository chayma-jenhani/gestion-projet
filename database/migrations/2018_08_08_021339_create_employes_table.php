<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmployesTable extends Migration {

	public function up()
	{
		Schema::create('employes', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			
			$table->string('adresse');
			$table->integer('tel1');
			$table->integer('tel2')->nullable();
			$table->string('email');
			$table->integer('CIN');
			$table->float('salaire');
			$table->string('statut');
			
			
			$table->string('Bank');
		});
	}

	public function down()
	{
		Schema::drop('employes');
	}
}