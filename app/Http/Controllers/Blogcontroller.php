<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blogcontroller extends Controller
{
    public function index(){
        return view('blogsite/home');
    }

    public function show($id){
        return view('blogsite/single', ['blog' => $id]);

    }
}
