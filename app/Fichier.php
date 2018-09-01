<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fichier extends Model 
{

    protected $table = 'fichiers';
    public $timestamps = false;

    public function projet()
    {
        return $this->belongsTo('Projet');
    }

}