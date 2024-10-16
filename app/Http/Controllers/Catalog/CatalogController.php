<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(){
        //return "Bienvenidos a la pagina principal de los cursos desde el controlador";
        return view('cursos.index');
        }

    public function create(){
        return view('cursos.create');
        }
    public function show($curso){
       //return "curso $curso";
        return view('cursos.show', ['curso'=> $curso]);
        }


}