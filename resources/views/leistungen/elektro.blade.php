@extends('layout.master')
@section('head')
    <title>Ihr Elektromeister aus Barkelsby - {{config('app.name')}}</title>
@endsection
@section('content')
    <div class="container">
        <h1>Elektroarbeiten aus Meisterhand</h1>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">
                    Es gibt Dinge
                    im Leben die
                    lässt man
                    besser
                    erledigen.
                    Arbeiten rund
                    um die Elektrik
                    kann ohne
                    Fachwissen
                    lebensgefährliche
                    Folgen haben.
                    Als
                    Meisterbetrieb
                    darf sich die
                    MHJ GmbH als
                    vom Fach
                    bezeichnen.
                    Hier gewähren
                    wir Ihnen einen
                    kleinen
                    EInblick über
                    das, was wir
                    alltäglich so
                    machen.
                </p>
                <h2>Leistungsauszug</h2>
                <ul>
                    <li>
                        Installation
                        und
                        Ausrichtung
                        von
                        Satellitenanlagen
                    </li>
                    <li>
                        Anbringung
                        von
                        Sicherheitssystemen
                    </li>
                    <li>
                        Aufputz-
                        und
                        Unterputzarbeiten
                    </li>
                    <li>
                        Anbringung
                        von
                        Beleuchtungssystemen
                    </li>
                    <li>
                        Anschluss
                        von
                        Waschmaschine
                        und
                        Herd
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img
                        class="img-fluid"
                        src="{{asset('images/1883052_bd_media_id_d93e2526dffdc98f9cfec38a9131fd22.jpeg')}}"
                        alt=""
                >
            </div>
        </div>
        <h2>
            Kabelgebühren
            sparen mittels
            SAT-Anlage
        </h2>
        <p class="lead">
            Wer möchte
            schon die
            lästigen
            Gebühren für
            den
            Kabelanbieter
            zahlen. In so
            ziemlich allen
            Haushalten
            lassen sich
            dank
            ausgefeilten
            Montagesystemen
            SAT-Anlagen
            installieren.
            Das kann nicht
            nur den eigenen
            Geldbeutel
            schonen, so ist
            auch die
            Programmauswahl
            um einiges
            vielfältiger.
            Interessant
            auch für alle,
            die gerne
            ausländische
            Fernsehsignale
            empfangen
            möchten.
            SAT-Anlagen
            gibt es in
            vielen
            Ausführungen.
            Wir beraten sie
            gerne
            ausgiebig!
        </p>
        <ul>
            <li>
                Verkauf
                von
                Komplett-
                oder
                Teillösungen
                -
                für
                bis
                zu
                64
                Teilnehmer
            </li>
            <li>
                Installation
                und
                Verkabelung
                -
                unterputz
                wie
                auch
                überputz
            </li>
            <li>
                Fachgerechte
                Ausrichtung
                der
                Schüssel
            </li>
        </ul>
    </div>
@endsection
