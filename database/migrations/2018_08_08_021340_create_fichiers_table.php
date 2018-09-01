<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFichiersTable extends Migration {

	public function up()
	{
		Schema::create('fichiers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom')->nullable();
			$table->string('chemin');
			$table->string('type');
			$table->integer('projet_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('fichiers');
	}
}