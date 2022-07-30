<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'filme_id', 'link'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function filme()
    {
        return $this->belongsTo(Filme::class);
    }
}
