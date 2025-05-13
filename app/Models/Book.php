<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'titulo',
        'slug',
        'autor',
        'editorial',
        'lugar',
        'fecha',
        'n_ejemplar',
        'fecha_ingreso',
        'observaciones',
        'cou',
    ];
}




