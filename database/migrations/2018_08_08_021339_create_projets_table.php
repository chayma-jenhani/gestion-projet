<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjetsTable extends Migration {

	public function up()
	{
		Schema::create('projets', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('titre');
			$table->text('description')->nullable();
			$table->date('delai');
			$table->integer('devis_id')->unsigned();
			$table->integer('responsable_id')->unsigned();
            $table->integer('client_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('projets');
	}
}