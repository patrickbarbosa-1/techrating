<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Postagem;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categoria_count = Categoria::count();
        $postagem_count = Postagem::count();
        $user_count = User::count();
        $categoria = Categoria::get();
        $postagens = Postagem::get();

        //dd($postagens);

        return view('home', [
            'categoria_count'   => $categoria_count,
            'postagem_count'    => $postagem_count,
            'user_count'        => $user_count,
            'categoria'        => $categoria,
            'postagens'          => $postagens
        ]);
    }
}
