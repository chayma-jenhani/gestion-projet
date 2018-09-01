<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('projets', function(Blueprint $table) {
			$table->foreign('devis_id')->references('id')->on('devis')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('projets', function(Blueprint $table) {
			$table->foreign('responsable_id')->references('id')->on('responsables')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
        Schema::table('projets', function(Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
		Schema::table('taches', function(Blueprint $table) {
			$table->foreign('projet_id')->references('id')->on('projets')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		
		Schema::table('factures', function(Blueprint $table) {
			$table->foreign('devis_id')->references('id')->on('devis')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('factures', function(Blueprint $table) {
			$table->foreign('projet_id')->references('id')->on('projets')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('factures', function(Blueprint $table) {
			$table->foreign('client_id')->references('id')->on('clients')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('devis', function(Blueprint $table) {
			$table->foreign('client_id')->references('id')->on('clients')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('fichiers', function(Blueprint $table) {
			$table->foreign('projet_id')->references('id')->on('projets')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('conges', function(Blueprint $table) {
			$table->foreign('employe_id')->references('id')->on('employes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('projet_employe', function(Blueprint $table) {
			$table->foreign('projet_id')->references('id')->on('projets')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('projet_employe', function(Blueprint $table) {
			$table->foreign('employe_id')->references('id')->on('employes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('projet_categorie', function(Blueprint $table) {
			$table->foreign('projet_id')->references('id')->on('projets')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('projet_categorie', function(Blueprint $table) {
			$table->foreign('categorie_id')->references('id')->on('categories')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tache_employe', function(Blueprint $table) {
			$table->foreign('employe_id')->references('id')->on('employes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tache_employe', function(Blueprint $table) {
			$table->foreign('tache_id')->references('id')->on('taches')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('conge_employe', function(Blueprint $table) {
			$table->foreign('conge_id')->references('id')->on('conges')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('conge_employe', function(Blueprint $table) {
			$table->foreign('employe_id')->references('id')->on('employes')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('projets', function(Blueprint $table) {
			$table->dropForeign('projets_devis_id_foreign');
		});
		Schema::table('projets', function(Blueprint $table) {
			$table->dropForeign('projets_client_id_foreign');
		});
		Schema::table('projets', function(Blueprint $table) {
			$table->dropForeign('projets_responsable_id_foreign');
		});
		Schema::table('taches', function(Blueprint $table) {
			$table->dropForeign('taches_projet_id_foreign');
		});
		
		Schema::table('factures', function(Blueprint $table) {
			$table->dropForeign('factures_devis_id_foreign');
		});
		Schema::table('factures', function(Blueprint $table) {
			$table->dropForeign('factures_projet_id_foreign');
		});
		Schema::table('factures', function(Blueprint $table) {
			$table->dropForeign('factures_client_id_foreign');
		});
		Schema::table('devis', function(Blueprint $table) {
			$table->dropForeign('devis_client_id_foreign');
		});
		Schema::table('fichiers', function(Blueprint $table) {
			$table->dropForeign('fichiers_projet_id_foreign');
		});
		Schema::table('conges', function(Blueprint $table) {
			$table->dropForeign('conges_employe_id_foreign');
		});
		Schema::table('projet_employe', function(Blueprint $table) {
			$table->dropForeign('projet_employe_projet_id_foreign');
		});
		Schema::table('projet_employe', function(Blueprint $table) {
			$table->dropForeign('projet_employe_employe_id_foreign');
		});
		Schema::table('projet_categorie', function(Blueprint $table) {
			$table->dropForeign('projet_categorie_projet_id_foreign');
		});
		Schema::table('projet_categorie', function(Blueprint $table) {
			$table->dropForeign('projet_categorie_categorie_id_foreign');
		});
		Schema::table('tache_employe', function(Blueprint $table) {
			$table->dropForeign('tache_employe_employe_id_foreign');
		});
		Schema::table('tache_employe', function(Blueprint $table) {
			$table->dropForeign('tache_employe_tache_id_foreign');
		});
		Schema::table('conge_employe', function(Blueprint $table) {
			$table->dropForeign('conge_employe_conge_id_foreign');
		});
		Schema::table('conge_employe', function(Blueprint $table) {
			$table->dropForeign('conge_employe_employe_id_foreign');
		});
	}
}