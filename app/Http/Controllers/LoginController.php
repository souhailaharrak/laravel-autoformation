<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){

        return view('login');
    }
    
    public function loginSumbit( Request $request){

        // return $request->All();
        $email= $request->input('email');
        $passwer= $request->input('passwerd');
  return    'Passwerd  ' .$passwer  .  " " . $email . " " .'email';
    }
}
