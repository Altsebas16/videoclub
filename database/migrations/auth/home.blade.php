<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Mostrar el dashboard de la aplicación.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->action([CatalogController::class, 'getIndex']);
    }
}
