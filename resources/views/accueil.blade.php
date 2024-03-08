@extends('base')
@section("title")
Accueil
@endsection
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
    span{
        color: #3498db !important;
    }
    .span{
        font-weight: bold;
    }

    .jumbotron {
            background-color: #f8f9fa;
        }

</style>
@section("content")
<main role="main" class="container">
    <div class="jumbotron mt-5">
        <h1 class="display-4">Bienvenue chez <p class="span">SANOGO <span>Transport</span></p></h1>
        <img src="/image/img.jpg" class="img-fluid mb-3" alt="Image d'accueil">

        <p class="lead">Nous sommes fiers de vous offrir nos services de transport de qualité.</p>
        <hr class="my-4">
        <p>Naviguez à travers notre site pour découvrir nos offres et réserver dès maintenant.</p>
        {{-- <a id="reserveButton" class="btn btn-primary btn-lg" href="{{route('apropos')}}" role="button">Réservez maintenant</a> --}}
    </div>
</main>

<!-- Bootstrap JS et jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Script JavaScript personnalisé -->
<script>
    // JavaScript pour changer le texte du bouton lors du survol
    document.getElementById("reserveButton").addEventListener("mouseover", function() {
        this.textContent = "Réservez dès maintenant !";
    });
    document.getElementById("reserveButton").addEventListener("mouseout", function() {
        this.textContent = "Réservez maintenant";
    });
</script>
<footer class="footer mt-auto py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>À Propos</h5>
                <p>Découvrez SANOGO Transport, votre partenaire de confiance pour vos déplacements.</p>
            </div>
            <div class="col-md-4">
                <h5>Liens Utiles</h5>
                <ul class="list-unstyled">
                    <li><a class="nav-link" href="{{route('accueil')}}">Accueil</a></li>
                    {{-- <li><a class="nav-link" href="{{route('apropos')}}">Reservez</a></li> --}}
                    <li><a class="nav-link" href="{{route('contact')}}">Contactez nous</a></li>
                    {{-- <li><a class="nav-link" href="{{route('index')}}">List des bus</a></li> --}}
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Contactez-nous</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt"></i> Hamdalaye ACI</li>
                    <li><i class="fas fa-phone"></i> +223 65 15 72 56</li>
                    <li><i class="fas fa-envelope"></i> sanogotransport@gmail.com</li>
                </ul>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">Suivez-nous sur les réseaux sociaux</p>
                <div class="text-center">
                    <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection
