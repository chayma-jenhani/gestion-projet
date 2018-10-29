<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Employe
{

    protected $table = 'responsables';
   
    public function projet()
    {
        return $this->hasMany(Projet::class);
    }

}