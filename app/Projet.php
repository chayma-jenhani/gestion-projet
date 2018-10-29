<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Projet extends Model 
{

    protected $table = 'projets';
    public $timestamps = true;

    public function tache()
    {
        return $this->hasMany(Tache::class);
    }

    public function fichier()
    {
        return $this->hasMany(Fichier::class);
    }

    public function categorie()
    {
        return $this->belongsToMany(Categorie::class);
    }

    public function facture()
    {
        return $this->hasOne(Facture::class);
    }

    public function devis()
    {
        return $this->belongsTo(Devis::class);
    }

    public function employe()
    {
        return $this->belongsToMany(Employe::class);
    }

    public function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}