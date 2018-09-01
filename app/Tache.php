<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model 
{

    protected $table = 'taches';
    public $timestamps = true;

    public function projet()
    {
        return $this->belongsTo('Projet');
    }

    public function employe()
    {
        return $this->belongsToMany('Employe');
    }

   

    

}