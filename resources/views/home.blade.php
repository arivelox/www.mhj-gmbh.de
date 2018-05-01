@extends('layout.master')
@section('head')
    <title>Heizung, Sanitär, Solar und Elektro aus Barkelsby
        - {{config('app.name')}}</title>
@endsection
@section('content')
    <div class="bg-light">
        <div class="container-fluid">
            <div class="row align-items-lg-center">
                <div class="col-12 col-lg-7">
                    <article>
                        <header>
                            <h1 class="text-uppercase">{{config('app.nameLong')}}</h1>
                            <h2>Ihr Heim in guten Händen!</h2>
                        </header>
                        <blockquote class="blockquote mb-4 mt-4">
                            <p class="lead">
                                Für uns ist Handwerk mehr
                                als nur die Ausführung von
                                Arbeiten nach Auftrag.<br>Handwerk
                                bedeutet Verantwortung und
                                Vertrauen - auf beiden
                                Seiten.</p>
                            <p class="lead">
                                Seit mehr als 10
                                Jahren in Familienhand und
                                mit über 25-jähriger
                                Erfahrung auf Meisterniveau
                                - die Montage- und
                                Haustechnik MHJ GmbH hat
                                sich inzwischen bewährt.&nbsp;<br>Mit
                                uns können Sie was
                                erschaffen. </p>
                            <footer class="blockquote-footer">
                                <cite
                                        title="Manfred Jürgensen, Geschäftsführer"
                                >Manfred Jürgensen, Geschäftsführer</cite>
                            </footer>
                        </blockquote>
                    </article>
                    <nav class="text-lg-center">
                        <div
                                class="d-flex flex-column flex-lg-inline-flex flex-lg-row"
                                role="group" aria-label="Kategorien"
                        >
                            <a
                                    href="{{url('heimwerkerblog')}}"
                                    title="Blog" role="button"
                                    class="btn btn-primary text-white font-weight-bold text-uppercase mr-1 w-100 rounded-0"
                            >Blog</a>
                            <a
                                    href="{{url('gallerie')}}" title="Gallerie"
                                    role="button"
                                    class="btn btn-primary text-white font-weight-bold text-uppercase mr-1 w-100 rounded-0"
                            >Gallerie</a>
                            <a
                                    href="{{url('leistungen')}}"
                                    title="Leistungen" role="button"
                                    class="btn btn-primary text-white font-weight-bold text-uppercase mr-1 w-100 rounded-0"
                            >Leistungen</a>
                            <a
                                    href="{{url('kontakt')}}" role="button"
                                    title="Kontakt"
                                    class="btn btn-primary text-white font-weight-bold text-uppercase w-100 rounded-0"
                            >Kontakt</a>
                        </div>
                    </nav>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="float-right">
                        <img
                                class="img-fluid"
                                src="{{asset('images/a45bc21d03ad0622ef9f3201645a9a09_billionphotos1079317min.png')}}"
                                alt=""
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mb-5">
            <section class="col-12 col-md-3 text-center">
                <a
                        title="Elektro-Leistungen"
                        href="{{url('leistungen/elektro')}}"
                >
                    <img
                            src="{{asset('images/995299_bd_media_id_61066381adcbc97eb420ca3aee522f24.png')}}"
                            alt="Elektroarbeiten" width="256"
                    >
                </a>
                <h2>
                    <a
                            class="font-weight-bold"
                            href="{{url('leistungen/elektro')}}"
                            title="Elektro-Leistungen"
                    >Elektro</a>
                </h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-action">
                        Elektroarbeiten aus
                        Meisterhand
                    </li>
                    <li class="list-group-item list-group-item-action">
                        Elektroinstallationen
                        im Rohbau
                    </li>
                    <li class="list-group-item list-group-item-action">
                        Verkabelung
                        in Geschäfts- und
                        Privaträumen
                    </li>
                    <li class="list-group-item list-group-item-action">
                        Starkstromtechnik
                        und Notstromanlagen
                    </li>
                </ul>
            </section>
            <section class="col-12 col-md-3 text-center">
                <a
                        href="{{url('leistungen/heizung')}}"
                        title="Heizung-Leistungen"
                >
                    <img
                            src="{{asset('images/1047305_bd_media_id_b463980cd404bb66b199ec35eb800474.png')}}"
                            alt="Heizungsarbeiten" width="256"
                    >
                </a>
                <h2>
                    <a
                            class="font-weight-bold"
                            href="{{url('leistungen/heizung')}}"
                            title="Heizung-Leistungen"
                    >Heizung</a>
                </h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-action">
                        Sämtliche Arbeiten rund ums
                        Thema Heizen
                    </li>
                    <li class="list-group-item list-group-item-action">
                        Erneuerung
                        von Heizkörpern und
                        Heizanlagen
                    </li>
                    <li class="list-group-item list-group-item-action">Ölkessel
                        und Gasheizungen
                    </li>
                    <li class="list-group-item list-group-item-action">Verkauf
                        von mobilen
                        Heizgeräten
                    </li>
                </ul>
            </section>
            <section class="col-12 col-md-3 text-center">
                <a
                        href="{{url('leistungen/sanitaer')}}"
                        title="Sanitaer-Leistungen"
                >
                    <img
                            src="{{asset('images/1080010_bd_media_id_58a7a13174b8b76e54320824189d1adc.png')}}"
                            alt="Sanitärarbeiten" width="256"
                    >
                </a>
                <h2>
                    <a
                            class="font-weight-bold"
                            href="{{url('leistungen/sanitaer')}}"
                            title="Sanitaer-Leistungen"
                    >Sanitär</a>
                </h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-action">Einbau
                        und Instandhaltung
                        von
                        Sanitäranlagen
                    </li>
                    <li class="list-group-item list-group-item-action">Duschen,
                        Toiletten,
                        Badewannen, Whirlpools
                    </li>
                    <li class="list-group-item list-group-item-action">
                        Klempnerarbeiten und
                        Rohrverstopfungen
                    </li>
                    <li class="list-group-item list-group-item-action">
                        Unterstützung
                        bei Designfragen
                    </li>
                </ul>
            </section>
            <section class="col-12 col-md-3 text-center">
                <a
                        href="{{url('leistungen/solar')}}"
                        title="Solar-Leistungen"
                >
                    <img
                            src="{{asset('images/1454645_bd_media_id_80425e8d081c8e18d3d786321ecca041.png')}}"
                            alt="Solararbeiten" width="256"
                    >
                </a>
                <h2>
                    <a
                            class="font-weight-bold"
                            href="{{url('leistungen/solar')}}"
                            title="Solar-Leistungen"
                    >Solar</a>
                </h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-action">Wartung
                        und Installation
                        von Solaranlagen
                    </li>
                    <li class="list-group-item list-group-item-action">
                        Stromerzeugende
                        Photovoltaik
                    </li>
                    <li class="list-group-item list-group-item-action">
                        Wärmegenerierende
                        Solarthermie
                    </li>
                    <li class="list-group-item list-group-item-action">Wir
                        beraten Sie ausgiebig
                    </li>
                </ul>
            </section>
        </div>
    </div>
    <p class="text-lg-center mb-4 p-3">
        Die Montage- und Haustechnik MHJ GmbH mit Sitz in Barkelsby
        bei Eckernförde im hohen Norden.<br>Seit über 10 Jahren
        mittlerweile sind wir als kleiner Familienbetrieb tätig in
        den Bereichen Elektro, Heizung, Sanitär und
        Solar.</p>
    <p class="text-lg-center p-3">
        Es ist kalt und Samstag Abend und dann
        das. Die Heizung will einfach nicht mehr warm werden.<br>Spätestens
        jetzt ist es wohl endgültig Zeit für einen professionellen
        Heizungstechniker.<br>Unser Servicedienst hilft Ihnen! <a
                href="{{url('kontakt')}}"
        >Setzen Sie sich mit uns in Verbindung </a>und gemeinsam
        finden wir eine Lösung. </p>
@endsection