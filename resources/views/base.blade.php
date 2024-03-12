<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Dans la section head de votre fichier de mise en page -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-rAbo8rmdJb2VtfmIQzJ3rf6xwQ1VU9WmtKWaB1O37LHVW3thIQudNBaRz6oqSjwXzgxyd9qlSFDm29ARagHa9g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* Custom styles */
        body {
            padding-top: 70px; /* Adjust the top padding for fixed navbar */
        }
        /* Custom class to make Transport link blue */
        span {
            color: #3498db !important;
        }


nav{
    display: flex;
    width: 100%;
    padding: 20px 0;
    justify-content: space-between;
    align-items: center;
    position: fixed;
    z-index: 999;
    background-color: #072f6d;

}
nav ul{
    display: flex;
    list-style: none;
}
nav ul li{
    margin: 0 20px;
}
nav ul li a{
    text-decoration: none;
    color: white;
    font-weight: bold;
}
nav ul li a:hover{
    color: #5E91F2;
}
nav a{
    text-decoration: none;
    color: black;
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="{{route('accueil')}}">SANOGO <span>Transport</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('accueil')}}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('reservez')}}">Reservez</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contactez nous</a>
                </li>
                <li class="nav-item transport-link">
                    <a class="nav-link" href="{{route('list')}}">List des bus</a>
                </li>
                <li class="nav-item transport-link">
                    <a class="nav-link" href="{{route('login')}}"> <i class="fas fa-sign-out-alt"></i><span> Déconnexion</span></a>
                </li>


            </ul>

        </div>
    </nav>

    <main role="main" class="container">
        @yield("content")
    </main>
</body>
</html>
