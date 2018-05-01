@extends('layout.master')
@section('head')
    <title>Leistungen - {{config('app.name')}}</title>
@endsection
@section('content')
    <section class="container-fluid puzzle-footer" id="leistungen">
        <div class="row align-items-lg-center">
            <div class="col">
                <h1 class="text-uppercase">
                    Ein Auszug unserer Leistungen </h1>
                <h2>
                    Alles nach Ihrem Wunsch. </h2>
                <h3>
                    Von Beratung über Planung bis zur Ausführung. </h3>
                <p class="lead">
                    Wir stehen Ihnen stets beratend zur Seite.<br>Termingerechte
                    Vollendung ist für uns selbstverständlich.<br>Dedizierte
                    Profis mit dem gewissen Anspruch.<br>Faire und
                    transparente Preisgestaltung.<br>Immer für Sie da,
                    auch nach dem Projekt. </p>
                <p class="lead">
                    Unser Einsatzgebiet beschränkt sich nicht auf
                    Barkelsby und Eckernförde.<br>Von Kiel entlang der
                    Förde bis nach Flensburg und in Richtung Süden bis nach
                    Hamburg sind wir stehts für Sie da. Kein
                    Weg ist uns zu weit. </p>

                <div
                        class="d-flex flex-column flex-lg-inline-flex flex-lg-row"
                        role="group" aria-label="Kategorien"
                >
                    <a
                            href="{{url('gallerie')}}" title="Gallerie"
                            role="button"
                            class="btn btn-primary text-white font-weight-bold text-uppercase mr-1 rounded-0"
                    >Gallerie</a>
                    <a
                            href="{{url('marken')}}" title="Blog" role="button"
                            class="btn btn-primary text-white font-weight-bold text-uppercase mr-1 rounded-0"
                    >Marken</a>

                </div>
            </div>
            <div class="col mt-3 mt-md-0" style="background-color: rgba(223,178,17,.75);">
                <div class="row align-items-center">
                    <div class="col-4 col-md-3 fa-6x">
                        <span class="fa-layers fa-fw mr-1">
                            <i class="fas fa-circle text-white"></i>
                            <i
                                    class="fa-inverse fas fa-bath text-dark"
                                    data-fa-transform="shrink-6"
                            ></i>
                        </span>
                    </div>
                    <div class="col-8 col-md-9">
                        <h4>
                            <a
                                    class="ml-3"
                                    href="{{url('leistungen/sanitaer')}}"
                                    title="Sanitär"
                            >Sanitär</a>
                        </h4>
                        <ul>
                            <li>Bäder</li>
                            <li>Rohrverstopfungen</li>
                            <li>Wasserzähler</li>
                        </ul>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-4 col-md-3 fa-6x">
                                                <span class="fa-layers fa-fw mr-1">
                            <i class="fas fa-circle text-white"></i>
                            <i
                                    class="fa-inverse fas fa-wrench text-dark"
                                    data-fa-transform="shrink-6"
                            ></i>
                        </span>
                    </div>
                    <div class="col-8 col-md-9">
                        <h4>
                            <a
                                    class="ml-3"
                                    href="{{url('leistungen/heizung')}}"
                                    title="Heizung"
                            >Heizung</a>
                        </h4>
                        <ul>
                            <li>Fußbodenheizung</li>
                            <li>Gasthermen</li>
                            <li>Ölbrenner- und kessel</li>
                        </ul>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-4 col-md-3 fa-6x">
                                                                        <span class="fa-layers fa-fw mr-1">
                            <i class="fas fa-circle text-white"></i>
                            <i
                                    class="fa-inverse fas fa-sun text-dark"
                                    data-fa-transform="shrink-6"
                            ></i>
                        </span>
                    </div>
                    <div class="col-8 col-md-9">
                        <h4>
                            <a
                                    class="ml-3"
                                    href="{{url('leistungen/solar')}}"
                                    title="Solar"
                            >Solar</a>
                        </h4>
                        <ul>
                            <li>Photovoltaik</li>
                            <li>Solarthermie</li>
                            <li>Stromspeicher</li>
                        </ul>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-4 col-md-3 fa-6x">
                                                                                                <span class="fa-layers fa-fw mr-1">
                            <i class="fas fa-circle text-white"></i>
                            <i
                                    class="fa-inverse fas fa-bolt text-dark"
                                    data-fa-transform="shrink-6"
                            ></i>
                        </span>
                    </div>
                    <div class="col-8 col-md-9">
                        <h4>
                            <a
                                    class="ml-3"
                                    href="{{url('leistungen/elektro')}}"
                                    title="Elektro"
                            >Elektro</a>
                        </h4>
                        <ul>
                            <li>Büroinstallation</li>
                            <li>Industrieanlagen</li>
                            <li>Wartungsarbeiten</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection