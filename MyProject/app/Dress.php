<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    protected $fillable = [
        'name', 'marca', 'taglia', 'prezzo', 'descrizione',
    ];
}
