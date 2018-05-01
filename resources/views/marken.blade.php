@extends('layout.master')
@section('head')

    <title>Marken
        - {{config('app.name')}}</title>
@endsection
@section('content')
    <div class="container">
        <h1 class="text-center">Wir glauben an Markenqualität</h1>
        <h2 class="text-center">...lieber nicht am falschen Ende sparen...</h2>
        <p>
            Die MHJ GmbH setzt ausschließlich auf bewährte Markenprodukte.
            Keine billigen Ramschprodukte oder aussortierte B-Waren.
        </p>
        <p>
            Hier haben wir Ihnen eine kleine Auswahl bereitgestellt über die
            beliebtesten Hersteller, womit Sie sicher nichts falsch
            machen.
        </p>
        <div class="row">
            <div class="col">
                <a
                        title="Vaillant" href="http://www.vaillant.de"
                        target="_blank"
                >
                    <img
                            class="img-fluid"
                            src="{{asset('images/e9a9ab5bf8180e51cd460085917e1809_vaillant.jpg')}}"
                            alt="Vaillant"
                    >
                </a>
            </div>
            <div class="col">
                <a
                        title="Viessmann" href="http://www.viessmann.de"
                        target="_blank"
                >
                    <img
                            class="img-fluid"
                            src="{{asset('images/00627843742f070bbc6914ef5279353b_viessmann.jpg')}}"
                            alt="Viessmann"
                    >
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a
                        title="BLANCO"
                        href="http://www.blanco-germany.com/de/index.html"
                        target="_blank"
                ><img
                            class="img-fluid"
                            src="{{asset('images/3adcc39a7e3164b73dc1b2e227d01eaa_blanco.gif')}}"
                            alt="BLANCO"
                    ></a>
            </div>
            <div class="col">
                <a
                        title="Buderus" href="https://www.buderus.de"
                        target="_blank"
                ><img
                            class="img-fluid"
                            src="{{asset('images/c2e0e9a8eafbf3c8e5cdf78f64585ef6_buderus.gif')}}"
                            alt="Buderus"
                    ></a>
            </div>
            <div class="col">
                <a
                        title="DURAVIT" href="http://www.duravit.de"
                        target="_blank"
                ><img
                            class="img-fluid"
                            src="{{asset('images/f1fa21aa7418f095f635490e1156787b_duravit.gif')}}"
                            alt="DURAVIT"
                    ></a>
            </div>
            <div class="col">
                <a
                        title="Franke"
                        href="http://www.franke.com/countries/de/de/home.html"
                        target="_blank"
                ><img
                            class="img-fluid"
                            src="{{asset('images/73a9db2367bca35585365308a93b5c10_franke.gif')}}"
                            alt="Franke"
                    ></a>
            </div>
            <div class="col">
                <a
                        title="Geberit" href="http://www.geberit.de"
                        target="_blank"
                ><img
                            class="img-fluid"
                            src="{{asset('images/66eb097dc8a34e738f761fbe982e9787_geberit.gif')}}"
                            alt="Geberit"
                    ></a>
            </div>
            <div class="col">
                <a
                        title="Hansgrohe" href="http://www.hansgrohe.de"
                        target="_blank"
                ><img
                            class="img-fluid"
                            src="{{asset('images/9317a1f97b36ebc766a29be9d9fefb51_hansgrohe.gif')}}"
                            alt="Hansgrohe"
                    ></a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a
                        href="http://www.hewi.com" target="_blank"
                        title="HEWI"
                ><img
                            class="img-fluid"
                            src="{{asset('images/79551201922e72c24432e8487287fe5e_hewi.gif')}}"
                            alt="HEWI"
                    ></a>
            </div>
            <div class="col">
                <a
                        title="KALDEWEI" href="http://www.kaldewei.de"
                        target="_blank"
                ><img
                            class="img-fluid"
                            src="{{asset('images/50bd6993b41ecd1b7f685fc38d51d978_kaldewei.gif')}}"
                            alt="KALDEWEI"
                    ></a>
            </div>
            <div class="col">
                <a
                        title="Keramag" href="http://www.keramag.de"
                        target="_blank"
                ><img
                            class="img-fluid"
                            src="{{asset('images/4a48eac595f597a43bb4bf9ed701cc4e_keramag.gif')}}"
                            alt="Keramag"
                    ></a>
            </div>
            <div class="col">
                <a
                        title="KEUCO" href="http://www.keuco.de"
                        target="_blank"
                ><img
                            class="img-fluid"
                            src="{{asset('images/da03e10b84c0277d9377307578f6c5b1_keuco.gif')}}"
                            alt="KEUCO"
                    ></a>
            </div>
            <div class="col">
                <a
                        href="https://www.newform.it/en/home-page/index"
                        target="_blank" title="newform"
                ><img
                            class="img-fluid"
                            src="{{asset('images/2e3447cac924df6180d2cc0632d216a6_newform.gif')}}"
                            alt="newform"
                    ></a>
            </div>
            <div class="col">
                <a
                        href="https://www.stiebel-eltron.de/de/home.html"
                        target="_blank" title="STIEBEL ELTRON"
                ><img
                            class="img-fluid"
                            src="{{asset('images/730682983cc5d810ca799f4c3736e65a_stiebeleltron.gif')}}"
                            alt="STIEBEL ELTRON"
                    ></a>
            </div>
        </div>
        <p class="mt-3">
            Selbstverständlich verbauen wir nur die Produkte,
            welche unser Kunde wünscht. Gerne stehen wir Ihnen dabei beratend
            zur Seite. Sie können die verschiedenen Artikel selbst besorgen
            oder wir erledigen das für Sie. Dabei können wir auf die
            auswahlreichen Sortimente der verschiedenen Großhändler in den
            Bereichen Bad, Sanitär, Solar und Elektro zurückgreifen und gute
            Konditionen ausarbeiten. Gemeinsam werden wir die für Sie beste
            Lösung schon finden!
        </p>
    </div>
@endsection