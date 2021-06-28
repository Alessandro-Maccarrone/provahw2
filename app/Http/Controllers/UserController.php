<?php

namespace App\Http\Controllers;

use Auth;

class UserController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()//mostra la pagina iniziale dell'utente autenticato
    {
        $user = Auth::user();
        return view('welcome');
    }

    public function preferiti()
    {
        return $this->belongsToMany(Ospedale::class, 'preferiti', 'iduser', 'idosp')->withTimeStamps();
    }
}