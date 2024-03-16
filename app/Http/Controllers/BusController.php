<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus;

class BusController extends Controller
{
    public function index()
    {
        $buses = Bus::all();
        return view('list', ['buses' => $buses]);
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
            'nombre_de_places' => 'required|integer',
            'depart' => 'required',
            'arrivee' => 'required',
            'frais_de_transport' => 'nullable|numeric',
        ]);

        Bus::create($request->all());

        return redirect()->route('list')->with('success', 'Bus ajouté avec succès.');
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
            'nombre_de_places' => 'required|integer',
            'depart' => 'required',
            'arrivee' => 'required',
            'frais_de_transport' => 'nullable|numeric',
        ]);

        $bus = Bus::findOrFail($id);
        $bus->update($request->all());

        return redirect()->route('buses.index')->with('success', 'Bus modifié avec succès.');
    }

    public function destroy($id)
    {
        $bus = Bus::findOrFail($id);
        $bus->delete();

        return redirect()->route('buses.index')->with('success', 'Bus supprimé avec succès.');
    }
    
}
