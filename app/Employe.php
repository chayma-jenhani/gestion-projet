<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model 
{

    protected $table = 'employes';
    public $timestamps = true;

    public function conge()
    {
        return $this->belongsToMany(Conge::class);
    }

    public function tache()
    {
        return $this->hasMany(Tache::class);
    }

    public function projet()
    {
        return $this->belongsToMany(Projet::class);
    }

}