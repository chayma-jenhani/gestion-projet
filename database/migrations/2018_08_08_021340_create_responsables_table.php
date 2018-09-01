<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResponsablesTable extends Migration {

	public function up()
	{
		Schema::create('responsables', function(Blueprint $table) {
                  $table->increments('id');
                  $table->timestamps();
                  $table->string('nom');
                  $table->string('prenom');
                  $table->string('adresse');
                  $table->integer('tel1');
                  $table->integer('tel2')->nullable();
                  $table->string('email');
                  $table->integer('CIN');
                  $table->float('salaire');
                  $table->string('statut');
                  $table->string('photo')->nullable();
                  $table->string('BK_banc')->nullable();;
                  $table->string('Bank');
		});
	}

	public function down()
	{
		Schema::drop('responsables');
	}
}