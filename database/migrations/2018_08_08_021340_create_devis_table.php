<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDevisTable extends Migration {

	public function up()
	{
		Schema::create('devis', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom');
			$table->timestamps();
			$table->integer('client_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('devis');
	}
}