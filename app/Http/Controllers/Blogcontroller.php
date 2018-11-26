<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Blogcontroller extends Controller
{
    public function index(){
        return view('blogsite/home');
    }

    public function show($id){

        $nilai  = 'ini adalah linknya' . $id;
        $user   = ['hilman', 'endy', 'rijal'];
        $unescaped  =   '<b> alert("x!") </b>';

        return view('blogsite/single', ['blog' => $nilai, 'user' => $user, 'unescaped' => $unescaped]);

    }
}
