<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacturesTable extends Migration {

	public function up()
	{
		Schema::create('factures', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('devis_id')->unsigned();
			$table->integer('projet_id')->unsigned();
			$table->integer('client_id')->unsigned();
			$table->float('montant');
		});
	}

	public function down()
	{
		Schema::drop('factures');
	}
}