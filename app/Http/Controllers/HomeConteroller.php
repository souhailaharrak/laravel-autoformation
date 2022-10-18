<?php

namespace App\Http\Controllers;




use Illuminate\Http\Request;

class HomeConteroller extends Controller
{
    public function home()
    {

        return view('home');
    }
    public function blog($id, $name = "par defult")
    {


        $postes = [
            1 => ['title' => " <h1>learn laravel 8</h1>"],
            2 => ['title' => "learn laravel 9"],

        ];
        return view('poste.show', [


            'data' => $postes[$id]
        ]);
    }
}
