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
        $request->validate([
            'content' => 'required|array',
        ]);

        $folio = \App\Models\Folio::create([
            'title' => $request->input('title', 'Nouveau Folio'),
            'content' => $request->input('content'),
            'user_id' => auth()->user()->id
        ]);

        $folio->save();
    }
}
