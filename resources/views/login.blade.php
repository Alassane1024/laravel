<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <!-- Bootstrap JS -->
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-center">Connectez-vous</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Adresse e-mail">
                        </div>

                        <div class="form-group">
                            <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Mot de passe">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                        </div>
                    </form>
                    <p class="text-center">Vous n'avez pas de compte? <a href="{{ route('register') }}">Inscrivez-vous</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

