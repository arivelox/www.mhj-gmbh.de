@extends('layout.master')
@section('head')

    <title>Ihr Sanitärfachmann aus Barkelsby
        - {{config('app.name')}}</title>
@endsection
@section('content')
    <div class="container">
        <h1>
            Sanitärarbeiten
            vom Fachmann
        </h1>
        <div class="row">
            <div class="col-md-6">
                <img
                        class="img-fluid"
                        src="{{asset('images/2749869_bd_media_id_114a799eb7314531fa794acd8adbb6ca.jpeg')}}"
                        alt=""
                >
            </div>
            <div class="col-md-6">
                <p class="lead">
                    Von der
                    Gestaltung über
                    dem Einbau bis
                    zur Nachprüfung
                    wird die MHJ
                    GmbH Ihnen
                    tatkräftig zur
                    Seite stehen.
                    <br>Ganz gleich
                    ob es sich um
                    die Sanierung
                    von vorhandenen
                    Bädern handelt
                    oder um
                    Installationen
                    im Neubau.
                    <br>Ihr
                    Fachmann aus
                    Barkelsby wenn
                    es richtig
                    gemacht werden
                    soll!
                </p>
                <h2>Sanitärleistungen</h2>
                <ul>
                    <li>
                        Vorwandmontage
                    </li>
                    <li>
                        Reperatur
                        und
                        Verlegung
                        von
                        Wasserleitungen
                    </li>
                    <li>Zu-
                        und
                        Abwassersysteme
                    </li>
                    <li>
                        Behindertengerechte
                        Badgestaltung
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
