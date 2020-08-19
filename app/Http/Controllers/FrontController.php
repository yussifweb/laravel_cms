<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function news(){

        return view('news');
    }

    public function uncategorized(){

        return view('uncategorized');
    }

    public function instrumentals(){

        return view('instrumentals');
    }

    public function mixes(){

        return view('mixes');
    }

    public function albums(){

        return view('albums');
    }

    public function videos(){

        return view('videos');
    }

    public function about(){

        return view('about');
    }

}

