<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model 
{

    protected $table = 'devis';
    public $timestamps = false;

    public function client()
    {
        return $this->belongsTo('Client');
    }

    public function facture()
    {
        return $this->hasOne('Facture');
    }

    public function projet()
    {
        return $this->hasOne('Projet');
    }

}