<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCongesTable extends Migration {

	public function up()
	{
		Schema::create('conges', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('nbrJours');
			$table->date('dateDebut');
			$table->date('dateFin');
			$table->integer('employe_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('conges');
	}
}