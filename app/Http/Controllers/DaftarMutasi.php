<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DaftarMutasi extends Controller
{
    public function __cosntruct(){
        $this->middleware("auth");
    }
    
    public function retView(){
        return view("daftar_mutasi", ["username"=>Auth::user()->email]);
    }
}
