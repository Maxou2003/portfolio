<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolioController extends Controller
{
    public function create()
    {
        return view('fo.folio.create', [
            'title' => 'Créer un folio',
            'route' => route('folio.store'),
        ]);
    }

    public function store(Request $request)
    {

        return redirect()->route('folio.create')->with('success', 'Folio created successfully!');
    }
}
