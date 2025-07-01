<?php

namespace App\Http\Controllers;

class HomeController
{
    /**
     * Affiche la page d'acceuil
     *  
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('fo.homePage.index');
    }
}
