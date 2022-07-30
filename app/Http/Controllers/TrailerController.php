<?php

namespace App\Http\Controllers;

use App\Http\Request\FilmeRequest;
use Illuminate\Http\Request;
use App\Models\Filme;
use App\Models\Trailer;
use App\Models\User;


class TrailerController extends Controller
{
    protected $user;
    protected $filme;
    protected $trailer;

    public function __construct(User $user, Filme $filme, Trailer $trailer)
    {
        $this->user = $user;
        $this->filme = $filme;
        $this->trailer = $trailer;
        $this->model = $trailer;
    }

}
