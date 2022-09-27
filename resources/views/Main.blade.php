<!DOCTYPE html>
<html lang="pl" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="author" content="Kamil Haniewicz">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('CSS/default.css'); }} ">
    <link rel="stylesheet" href="{{ URL::asset('fonts/Saira.ttf'); }} ">
    <link rel="stylesheet" href="{{ URL::asset('fonts/PlayFair.ttf'); }} ">
    @yield('head')
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Journaling</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Kontakt</a>

                    </ul>
                    <div class="d-flex" role="search">
                        @guest
                            <a href="/login" class="btn btn-outline-success">Zaloguj się</a>
                        @endguest
                        @auth
                            <a href="/dashboard" class="btn btn-outline-success" style="margin-right: 5px;">Panel użytkownika</a>
                            <a href="/logout" class="btn btn-outline-danger">Wyloguj się</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')


    <div class="informator">
        <div class="container">
            © 2022 Journaling.pl <a href="/privacy">Polityka prywatności</a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>
