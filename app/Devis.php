<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model 
{

    protected $table = 'devis';
    public $timestamps = false;

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function facture()
    {
        return $this->hasOne('App\Facture');
    }

    public function projet()
    {
        return $this->hasOne('App\Projet');
    }

}