<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;

class BusController extends Controller
{
    public function index()
    {
        $bus = Bus::all();
        return view('list', compact('bus'));
    }

    public function create()
    {
        return view('ajouter_bus');
    }

    public function store(Request $request)
    {
        $request->validate([
            'marque' => 'required',
            'couleur' => 'required',
            'nombre_de_place' => 'required|numeric',
            'depart' => 'required',
            'arriver' => 'required',
        ]);

        Bus::create($request->all());

        return redirect()->route('bus.index')->with('success', 'Bus ajouté avec succès!');
    }

    public function edit($id)
    {
        $bus = Bus::findOrFail($id);
        return view('modifier_bus', compact('bus'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'marque' => 'required',
            'couleur' => 'required',
            'nombre_de_place' => 'required|numeric',
            'depart' => 'required',
            'arriver' => 'required',
        ]);

        $bus = Bus::findOrFail($id);
        $bus->update($request->all());

        return redirect()->route('bus.index')->with('success', 'Bus modifié avec succès!');
    }

    public function destroy($id)
    {
        $bus = Bus::findOrFail($id);
        $bus->delete();

        return redirect()->route('bus.index')->with('success', 'Bus supprimé avec succès!');
    }
}

