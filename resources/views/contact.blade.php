@extends('base')
@section("title")
Accueil
@endsection
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@section("content")
<style>
span{
        color: #3498db !important;
    }
</style>
<div class="container">
    <h2 class="mt-5 mb-3">Contactez<span>-nous</span></h2>
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('contact') }}" method="POST">
                @csrf
                <!-- Dans votre vue Blade -->
                @if (session('success'))
                <div id="successMessage" class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif



                <div class="form-group">
                    <label for="nom">Nom et Prénom:</label>
                    <input type="text" class="form-control" id="nom" name="name" placeholder="Entrez votre nom et prénom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Entrez votre message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
        <div class="col-md-6">
            <h4>Nos Coordonnées:</h4>
            <p><strong>Adresse:</strong> Hamdalaye ACI</p>
            <p><strong>Téléphone:</strong> +223 65 15 72 56</p>
            <p><strong>Email:</strong> sanogotransport@gmail.com</p>
            <h4>Localisation:</h4>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.0144851474173!2d2.2944812156781636!3d48.85837080815665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sEiffel%20Tower!5e0!3m2!1sen!2sfr!4v1614395621893!5m2!1sen!2sfr" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>

<script>
    // Masquer le message de succès après 3 secondes
    setTimeout(function() {
        $('#successMessage').fadeOut('slow');
    }, 3000); // 3000 millisecondes = 3 secondes
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
