<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model 
{

    protected $table = 'clients';
    public $timestamps = false;

    public function devis()
    {
        return $this->hasMany('Devis');
    }
    public function projet()
    {
        return $this->hasMany('Projet');
    }

}