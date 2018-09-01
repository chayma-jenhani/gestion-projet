<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conge extends Model 
{

    protected $table = 'conges';
    public $timestamps = true;

    public function conge()
    {
        return $this->belongsToMany('Employe');
    }

}