@extends('base')
@section("title")
Modifier un bus

@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@section("content")
<div class="container">
    <h2>Modifier un bus</h2>
    <form action="{{ route('bus.update', $bus->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="marque">Marque:</label>
            <input type="text" class="form-control" id="marque" name="marque" value="{{ $bus->marque }}" required>
        </div>
        <div class="form-group">
            <label for="couleur">Couleur:</label>
            <input type="text" class="form-control" id="couleur" name="couleur" value="{{ $bus->couleur }}" required>
        </div>
        <div class="form-group">
            <label for="nombre_de_places">Nombre de Places:</label>
            <input type="number" class="form-control" id="nombre_de_places" name="nombre_de_places" value="{{ $bus->nombre_de_places }}" required>
        </div>
        <div class="form-group">
            <label for="depart">Départ:</label>
            <input type="text" class="form-control" id="depart" name="depart" value="{{ $bus->depart }}" required>
        </div>
        <div class="form-group">
            <label for="arrivee">Arrivée:</label>
            <input type="text" class="form-control" id="arrivee" name="arrivee" value="{{ $bus->arrivee }}" required>
        </div>
        <div class="form-group">
            <label for="frais_de_transport">Frais de Transport:</label>
            <input type="number" class="form-control" id="frais_de_transport" name="frais_de_transport" value="{{ $bus->frais_de_transport }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Modifier Bus</button>
    </form>
</div>
@endsection
