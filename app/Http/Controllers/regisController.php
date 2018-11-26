<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class regisController extends Controller
{
    public function insert(Request $req){
        $rename    = $req->input('renama');
        $reemail   = $req->input('reemail');
        $relahir   = $req->input('relahir');
        $rejekel   = $req->input('rejekel');
        $regoldar  = $req->input('regoldar');
        $realamat  = $req->input('realamat');
        $rephoto   = $req->input('rephoto');

        $data      = array('nama'=>$rename,'email'=>$reemail,'ttl'=>$relahir,'jeniskel'=>$rejekel,'idgoldar'=>$regoldar,'alamat'=>$realamat,'foto'=>$rephoto);

        DB::table('pendonor')->insert($data);

        return view('home');
    }
}
