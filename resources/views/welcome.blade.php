<!DOCTYPE html>
<html lang="pl" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="author" content="Kamil Haniewicz">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('CSS/default.css'); }} ">
        <link rel="stylesheet" href="{{ URL::asset('fonts/Rubik.ttf'); }} ">
        @yield('head')
    </head>
    <body>
        <header>
          <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Journaling</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                    <a class="nav-link" href="/contact">Kontakt</a>
                  </li>
                </ul>
                <div class="d-flex" role="search">
                  <a href="/login" class="btn btn-outline-success">Zaloguj się</a>
              </div>
              </div>
            </div>
          </nav>
        </header>

        <div style="padding:0" class="container-fluid">
            <div class="informator">
                <div class="container">
                    <h1>Witaj na Journaling!</h1>
                    <p>Cieszę się, że chcesz zacząć swoją przygodę z journalingiem. Poniżej znajdziesz informacje dot. tego jakie możliwości oferuje ta strona, oraz tego czym jest journaling sam w sobie.</p>
                </div>
            </div>
            <div class="rows">
                <!-- Possibilities row -->
                <div class="container columns-row">
                    <h2>Możliwości tej strony</h2>
                    <div class="row align-items-start">
                      <div class="col">
                        <h3 class="possibility-header">Dziennik wdzięczności</h3>
                        <p>Zapisuj za co jesteś wdzięczny. Pozwoli ci to dostrzegać więcej pozytywów w życiu</p>
                      </div>
                      <div class="col">
                        <h3 class="possibility-header">Przemyślenia</h3>
                        <p>Masz jakieś przemyślenia w danym momencie dnia? Lepiej je zapisz. W końcu możesz o nich zapomnieć</p>
                      </div>
                      <div class="col">
                        <h3 class="possibility-header">Twoja własna kategoria</h3>
                        <p>Journaling jest dość rozległy. Sam możesz stworzyć kategorie do których chcesz dodawać wpisy</p>
                      </div>
                    </div>
                </div>
                <!--About journaling row-->
                <div class="informator">
                    <div class="container">
                        <h2>Czym jest journaling?</h2>
                        <p>Journaling to najprościej mówiąc, prowadzenie dziennika, co pomaga uporządkować swoje myśli oraz lepiej poznać samego siebie. Istnieje wiele kategorii journalingu, ale równie dobrze możesz samemu wymyślić o czym chcesz pisać.</p>
                    </div>
                </div>
                <!--Why this site? Row-->
                <div class="container">
                    
                </div>

            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    </body>
</html>
