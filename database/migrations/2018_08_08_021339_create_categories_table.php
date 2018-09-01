<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('nom');
			$table->string('image')->nullable();
			$table->text('description')->nullable();
			$table->string('statut');
			
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}
}