<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //return view('welcome');
    public function __invoke(){
        return view('home');


    }
}