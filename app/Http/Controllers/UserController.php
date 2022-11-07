<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Phone;



use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
       
          $phone=Phone::find(2)->user;
        return $phone;
    }
}
