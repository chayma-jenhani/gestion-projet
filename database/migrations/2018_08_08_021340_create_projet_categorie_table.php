<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjetCategorieTable extends Migration {

	public function up()
	{
		Schema::create('projet_categorie', function(Blueprint $table) {
			
			$table->integer('projet_id')->unsigned();
			$table->integer('categorie_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('projet_categorie');
	}
}