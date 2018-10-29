<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model 
{

    protected $table = 'factures';
    public $timestamps = false;

    public function projet()
    {
        return $this->belongsTo(Projet::class);
    }

    public function devis()
    {
        return $this->belongsTo(Devis::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}