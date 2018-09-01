<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTachesTable extends Migration {

	public function up()
	{
		Schema::create('taches', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->date('deadline');
			$table->string('titre');
			$table->text('description')->nullable();
			$table->string('statut');;
			$table->string('priorite');
			$table->integer('projet_id')->unsigned();
			
		});
	}

	public function down()
	{
		Schema::drop('taches');
	}
}