<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Projet extends Model 
{

    protected $table = 'projets';
    public $timestamps = true;

    public function tache()
    {
        return $this->hasMany('Tache');
    }

    public function fichier()
    {
        return $this->hasMany('Fichier');
    }

    public function categorie()
    {
        return $this->belongsToMany('Categorie');
    }

    public function facture()
    {
        return $this->hasOne('Facture');
    }

    public function devis()
    {
        return $this->belongsTo('Devis');
    }

    public function employe()
    {
        return $this->belongsToMany('Employe');
    }

    public function responsable()
    {
        return $this->belongsTo('Responsable');
    }
    public function client()
    {
        return $this->belongsTo('Client');
    }
}