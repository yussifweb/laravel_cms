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

    // Back Controller

    public function create(){

        return view('categories/create');
    }

    public function index(){

        return view('categories/index');
    }

    public function register(){

        return view('users/register');
    }

    public function login(){

        return view('users/login');
    }

    public function createPost(){

        return view('posts/create');
    }

    public function postEdit(){

        return view('posts/edit');
    }



}

