<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model 
{

    protected $table = 'taches';
    public $timestamps = true;

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }

    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }

   

    

}