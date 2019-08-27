<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReleaseSaldo extends Controller
{
    public $rel = ["10000", "25000", "50000", "100000"];

    
    public function __construct(){
        $this->middleware("auth");
    }
    public function retView(Request $request){
        $args = ["release_saldo"=>$this->rel, "username"=>Auth::user()->email];
        if ($request->session()->has("saldo")){
            $args["success"] = true;
            $args["saldo"] = $request->session()->get("saldo");
        }
        $request->session()->forget('saldo');
        return view("release", $args);
    }

    public function release($rel){

        session(["saldo"=>$rel]);
        return redirect()->action("ReleaseSaldo@retView");

    }
}