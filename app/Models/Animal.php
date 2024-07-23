<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    // adding fillable data
    protected $fillable =
    [
        'nome',
        'specie',
        'razza',
        'eta',
        'sesso',
        'peso',
        'altezza',
        'url_img',
        'info'
    ];
}
