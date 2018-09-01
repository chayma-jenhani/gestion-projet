<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model 
{

    protected $table = 'factures';
    public $timestamps = false;

    public function projet()
    {
        return $this->belongsTo('Projet');
    }

    public function devis()
    {
        return $this->belongsTo('Devis');
    }

}