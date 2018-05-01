@extends('heimwerkerblog.master')
@section('blog-title')Photovoltaik oder Solarthermie @endsection
@section('blog-content')
    <article class="container">
        <h1>Photovoltaik oder Solarthermie</h1>
        <p class="lead">
            Wir bekommen häufig die Frage gestellt ob es sich hierbei
            um das Gleiche handelt. Um das gleich vorweg klar zu
            stellen: Photovoltaik und Solarthermie sind zwei
            grundlegend verschiedene Techniken.<br>Der wichtigste
            Unterschied zwischen Photovoltaik und Solarthermie ist der,
            dass mit beiden Formen jeweils etwas anderes generiert
            wird.<br>Photovoltaik erzeugt Strom.<br>Solarthermie
            erzeugt Wärme.<br>Photovoltaik wandelt Sonnenenergie um in
            elektrische Energie mit Hilfe von Solarzellen.<br>Solarthermie
            lagert die Wärme in Wärmespeichern mit Hilfe von
            Solarkollektoren. </p>
        <div class="row">
            <div class="col">
                <h2>Photovoltaik</h2>
                <img
                        class="img-fluid"
                        src="{{asset('images/4747c2b211eb12659c05888b52a9011d_pv_aufbau_solarzelle.jpg')}}"
                        alt="Das Prinzip von Photovoltaik"
                >
                <p>
                    <small>Bild: solarverein-amberg.de</small>
                </p>
            </div>
            <div class="col">
                <h2>Solarthermie</h2>
                <img
                        class="img-fluid"
                        src="{{asset('images/4ea3b8bdaea2a555dbb29ff93e910a42_solarthermieflachkollektorquerschnittjunkers.jpg')}}"
                        alt="Das Prinzip von Solarthermie"
                >
                <p>
                    <small>Bild: junkers.de</small>
                </p>
            </div>
        </div>
    </article>
@endsection
@section('blog-date')August 14, 2016 @endsection