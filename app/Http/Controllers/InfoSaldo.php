<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoSaldo extends Controller
{
    public function retView(Request $request){
        return view("info_saldo", ["username"=>Auth::user()->email, "saldo"=>450000]);
    }
}
