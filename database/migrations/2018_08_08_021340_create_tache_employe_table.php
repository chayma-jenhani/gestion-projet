<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTacheEmployeTable extends Migration {

	public function up()
	{
		Schema::create('tache_employe', function(Blueprint $table) {
			
			$table->integer('employe_id')->unsigned();
			$table->integer('tache_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('tache_employe');
	}
}