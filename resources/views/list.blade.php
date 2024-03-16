@extends('base')
@section("title")
Accueil
@endsection
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="container">
    <h2>Liste des Bus</h2>
    <a href="{{ route('bus.create') }}" class="btn btn-primary mb-3">Ajouter un bus</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marque</th>
                <th>Couleur</th>
                <th>Nombre de Places</th>
                <th>Départ</th>
                <th>Arrivée</th>
                <th>Frais de Transport</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buses as $bus)
            <tr>
                <td>{{ $bus->id }}</td>
                <td>{{ $bus->marque }}</td>
                <td>{{ $bus->couleur }}</td>
                <td>{{ $bus->nombre_de_places }}</td>
                <td>{{ $bus->depart }}</td>
                <td>{{ $bus->arrivee }}</td>
                <td>{{ $bus->frais_de_transport }}</td>
                <td>
                    <a href="{{ route('bus.edit', $bus->id) }}" class="btn btn-sm btn-primary">Modifier</a>
                    <form action="{{ route('bus.destroy', $bus->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
