<?php

namespace App\Http\Controllers;

use App\News;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){//metodo index
        $news = News::all();//select * su  news del DB
        return view('index', ['news' => $news]);
    }
}
