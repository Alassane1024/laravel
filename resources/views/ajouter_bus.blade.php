


@extends('base')
@section("title")
Accueil
@endsection
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<div class="container">
    <h2>Ajouter un Bus</h2>
    <form action="{{ route('bus.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="marque">Marque :</label>
            <input type="text" class="form-control" id="marque" name="marque" required>
        </div>
        <div class="form-group">
            <label for="couleur">Couleur :</label>
            <input type="text" class="form-control" id="couleur" name="couleur" required>
        </div>
        <div class="form-group">
            <label for="nombre_de_places">Nombre de Places :</label>
            <input type="number" class="form-control" id="nombre_de_places" name="nombre_de_places" required>
        </div>
        <div class="form-group">
            <label for="depart">Départ :</label>
            <input type="text" class="form-control" id="depart" name="depart" required>
        </div>
        <div class="form-group">
            <label for="arrivee">Arrivée :</label>
            <input type="text" class="form-control" id="arrivee" name="arrivee" required>
        </div>
        <div class="form-group">
            <label for="frais_de_transport">Frais de Transport :</label>
            <input type="number" class="form-control" id="frais_de_transport" name="frais_de_transport" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>


