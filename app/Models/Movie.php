<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class Movie extends Controller
{
    // Método para mostrar el listado de películas
    public function getIndex()
    {
        // Elimina el array de películas que usabas antes
        // $arrayPeliculas = [
        //     ['title' => 'Pelicula 1', 'year' => 2020, 'director' => 'Director 1', 'id' => 1],
        //     ['title' => 'Pelicula 2', 'year' => 2021, 'director' => 'Director 2', 'id' => 2],
        //     ...
        // ];

        // En su lugar, obtenemos todas las películas del modelo Movie
       

        // Pasamos las películas a la vista
        return view('catalog.index', compact('peliculas'));
    }

    // Método para mostrar una película individual
    public function getShow($id)
    {


        // Pasamos la película a la vista catalog/show.blade.php
        return view('catalog.show', compact('pelicula'));
    }

    // Método para editar una película
    public function getEdit($id)
    {
    

        // Pasamos la película a la vista catalog/edit.blade.php
        return view('catalog.edit', compact('pelicula'));
    }
}

