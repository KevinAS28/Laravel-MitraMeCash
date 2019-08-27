<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationCode extends Controller
{
    public function __construct(){
        $this->middleware('auth');  
    }
    public function verify(Request $request){
        return redirect()->action("HomeController@index");
    }
    
}
