@extends('layout.master')
@section('head')
    <title>Kontakt - {{config('app.name')}}</title>
@endsection
@section('content')
    <section
            class="container-fluid text-white font-weight-bold overlay puzzle-footer"
            id="kontakt"
    >
        <div class="row">
            <div class="col-sm-6">
                <h1>Kontakt</h1>
                <h2>Wir beraten Sie gerne!</h2>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <address>
                                Dorfstraße
                                19<br>24360
                                Barkelsby<br>Schleswig-Holstein
                            </address>
                        </div>
                        <div class="col-sm-6">
                            <p>
                                Telefon:
                                04351
                                -
                                475
                                401<br>Telefax:
                                04351
                                -
                                88
                                05
                                37<br>E-Mail:
                                kontakt@mhj-gmbh.de </p>
                        </div>
                    </div>
                </div>
                <p class="lead">
                    Persönliche
                    Beratungsgespräche sind
                    selbstverständlich
                    kostenfrei und nicht
                    bindend.<br>Gut
                    informierte Kunden sind
                    uns wichtig. Wir mögen
                    keine
                    Intransparenz.
                </p>
                <p>
                    Unser
                    Büro hat geöffnet von 08:00 -
                    16:30, montags bis
                    freitags.<br>Wir freuen
                    uns auf Sie!
                </p>
            </div>
            <div class="col-sm-6">
                <div class="img-thumbnail embed-responsive embed-responsive-21by9">
                    <iframe
                            class="embed-responsive-item"
                            src="{{config('app.googleMapsCoords')}}"
                    ></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
