<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filme extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'image',
        'name',
        'duracao',
        'genero',
        'classificacao',
        'linguagem',
        'sinopse',
        'dtbirth',
        'plataformas',
        'direcao',
        'premio'
    ];
}
