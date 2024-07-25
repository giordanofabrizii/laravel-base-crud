<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Animal extends Model
{
    use HasFactory;
    use SoftDeletes;

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
