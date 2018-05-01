@extends('layout.master')
@section('head')
    <title>Ihr Heizungsbauer aus Barkelsby
        - {{config('app.name')}}</title>
@endsection
@section('content')
    <div class="container">
        <h1>Fachgerechte Heizungsarbeiten</h1>
        <div class="row">
            <div class="col-md-6">
                <img
                        class="img-fluid"
                        src="{{asset('images/1883034_bd_media_id_b86311bb2e140b384e41e973b2aecffe.jpeg')}}"
                        alt=""
                >
            </div>
            <div class="col-md-6">
                <p>
                    Gerade an
                    kalten
                    Wintertagen ist
                    eine durchweg
                    funktionierende
                    Heizung ein
                    Muss. Schlechte
                    gewartete
                    Heizungssysteme
                    geben oftmals
                    ganz plötzlich
                    den Geist auf.
                    Regelmäßige
                    Wartung durch
                    Fachpersonal
                    kann dies in
                    vielen Fällen
                    vermeiden. Ihr
                    Meisterbetrieb
                    aus Barkelsby
                    wird Ihnen
                    tatkräftig zur
                    Seite stehen.
                </p>
                <h2>Leistungsüberblick</h2>
                <ul>
                    <li>
                        Gas-
                        und
                        Ölheizungen
                    </li>
                    <li>
                        Etagenheizungen
                    </li>
                    <li>
                        Fußbodenheizungen
                    </li>
                    <li>
                        Kesseltausch
                    </li>
                    <li>
                        Kraft-Wärme-Kopplungen
                    </li>
                </ul>
                <p>
                    Setzen Sie sich
                    mit uns in <a
                            href="{{url('kontakt')}}"
                    >Kontakt</a>
                    und wir werden
                    gemeinsam eine
                    Lösung
                    ausarbeiten! </p>
            </div>
        </div>
        <h2>
            Mollig warme
            Füße: Die
            Fußbodenheizung</h2>
        <p>
            Gerade wer sich
            für einen
            Neubau
            entscheidet,
            der wählt
            oftmals auch
            die
            Fußbodenheizung.
            Auch wenn der
            Einbau etwas
            teurer ist als
            herkömmliche
            Radiatoren, so
            lohnt es sich
            in der Regel
            doch.
            Fußbodenheizungen
            sind nämlich
            oftmals
            effizienter als
            herkömmliche
            Heizungskörper.
            Viele Bauherren
            entscheiden
            sich auch aus
            ästhetischen
            Gründen für
            eine
            Fußbodenheizung,
            denn man kann
            sie nicht
            sehen.
            Dementsprechend
            nimmt sie auch
            keinen Platz
            ein und steht
            nie im Wege.
        </p>
        <h3>
            Fußbodenheizungen
            sind günstiger
            im Betrieb</h3>
        <p>
            Richtig gehört.
            Eine
            Fußbodenheizung
            verursacht
            weniger
            laufende Kosten
            als
            herkömmliche
            Heizkörper. Das
            liegt zum einen
            an der
            niedrigeren
            Vorlauftemperatur
            verglichen zu
            herkömmlichen
            Radiatoren, und
            zum anderen
            kommt es einem
            einfach wärmer
            vor. Das liegt
            daran, dass
            Flächenheizungen
            ihre Wärme von
            unten nach oben
            abgeben, wobei
            Heizkörper die
            Wärme von einem
            Punkt
            ausstrahlen.
        </p>
    </div>
@endsection
