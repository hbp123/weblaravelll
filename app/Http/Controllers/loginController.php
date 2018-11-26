<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class loginController extends Controller
{
    public function login(Request $req){
        $inemail    = $req -> input('inemail');
        $inpass     = $req -> input('inpass');

        $checklogin = DB::table('adminn') -> where(['emaile'=>$inemail,'passadmin'=>$inpass])->get();

        if (count($checklogin)  >0) {
            echo "login success ho";
        }
        else{
            echo "login failho";
        }
    }
}
