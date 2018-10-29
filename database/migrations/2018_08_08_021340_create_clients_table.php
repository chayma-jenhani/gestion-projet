<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			
			$table->string('adresse');
			
			$table->integer('tel');
			$table->string('email');
			$table->string('statut');
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}