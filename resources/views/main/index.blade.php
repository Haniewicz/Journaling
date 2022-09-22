@extends('Main')

@section('title')
Journaling
@endsection

@section('head')

@endsection

@section('content')
    <div style="padding:0" class="container-fluid">
        <div class="informator">

            <h1 class="banner">Journaling</h1>
        </div>
    </div>
    <div class="container">
        <!-- Possibilities row -->
        <div class="container columns-row">
            <hr class="title-divider">
            <h2>Co możesz zrobić na tej stronie?</h2>
            <hr class="title-divider">
            <div class="row align-items-center">
                <div class="col">
                    <h4>Dziennik wdzięczności</h4>
                </div>
                <div class="col">
                    <p>Codziennie zapisuj, za co jesteś wdzięczny. W końcu zaczniesz skupiać się bardziej na pozytywach</p>
                </div>
            </div>
            <hr>
            <div class="row align-items-center">
                <div class="col">
                    <h4>Dziennik przemyśleń</h4>
                </div>
                <div class="col">
                    <p>W trakcie dnia przelatuje nam przez głowę wiele myśli. Niektóre warto zapisać na później</p>
                </div>
            </div>
            <hr>
            <div class="row align-items-center">
                <div class="col">
                    <h4>Własna kategoria wpisów</h4>
                </div>
                <div class="col">
                    <p>Journaling to dość rozległe pojęcie. Nie sposób umieścić na stronie wszystkich kategorii, ale sam możesz takową dla siebie stworzyć</p>
                </div>
            </div>
        </div>
    </div>

    <!--About journaling row-->
    <div class="informator">
        <div class="container">
            <hr class="title-divider">
            <h2>Czym jest journaling?</h2>
            <hr class="title-divider">
            <p>Journaling to najprościej mówiąc, prowadzenie dziennika, co pomaga uporządkować swoje myśli oraz lepiej poznać samego siebie. Istnieje wiele kategorii journalingu, ale równie dobrze możesz samemu wymyślić o czym chcesz pisać.</p>
        </div>
    </div>
    <!--Why this site? Row-->
    <div class="container columns-row benefits">
        <hr class="title-divider">
        <h2>Zalety journalingu</h2>
        <hr class="title-divider">
        <h4>Pomaga lepiej poznać samego siebie</h4>
        <h4>Pobudza kreatywność</h4>
        <h4>Może zmniejszyć poziom stresu</h4>
        <h4>Pomaga odkryć swoje ograniczenia i pracować nad nimi</h4>
        <h4>Pomaga uporządkować myśli</h4>
        <h4>Może poprawiać nastrój</h4>
        <h4>Skłania do refleksji</h4>

    </div>
@endsection
