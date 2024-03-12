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
        <!-- Champs du formulaire pour modifier les données du bus -->
        <div class="form-group">
            <label for="marque">Marque :</label>
            <input type="text" class="form-control" id="marque" name="marque" value="{{ $bus->marque }}" required>
        </div>
        <div class="form-group">
            <label for="couleur">Couleur :</label>
            <input type="text" class="form-control" id="couleur" name="couleur" value="{{ $bus->couleur }}" required>
        </div>
        <div class="form-group">
            <label for="nombre_de_place">Nombre de places :</label>
            <input type="number" class="form-control" id="nombre_de_place" name="nombre_de_place" value="{{ $bus->nombre_de_place }}" required>
        </div>
        <div class="form-group">
            <label for="depart">Départ :</label>
            <input type="text" class="form-control" id="depart" name="depart" value="{{ $bus->depart }}" required>
        </div>
        <div class="form-group">
            <label for="arriver">Arrivée :</label>
            <input type="text" class="form-control" id="arriver" name="arriver" value="{{ $bus->arriver }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>
@endsection
