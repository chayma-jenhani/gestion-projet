<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjetEmployeTable extends Migration {

	public function up()
	{
		Schema::create('projet_employe', function(Blueprint $table) {

			$table->integer('projet_id')->unsigned();
			$table->integer('employe_id')->unsigned();

		});
	}

	public function down()
	{
		Schema::drop('projet_employe');
	}
}