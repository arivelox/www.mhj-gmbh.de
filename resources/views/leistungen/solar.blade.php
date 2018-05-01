@extends('layout.master')
@section('head')
    <title>Ihr Solartechniker aus Barkelsby - {{config('app.name')}}</title>
@endsection
@section('content')
    <div class="container">
        <h1>
            Solarenergie: Ein stück
            Vernunft für den Planet
            Erde
        </h1>
        <div class="row">
            <div class="col-md-6">
                <p>
                    Immer mehr Hausbesitzer
                    erkundigen sich nach
                    Solaranlagen.<br>Kein
                    Wunder, bei den
                    jährlich steigenden
                    Strom- und
                    Wasserkosten.<br>Nehmen
                    Sie das Zepter in
                    eigene Hand und lösen
                    Sie sich von der
                    Abhängigkeit gegenüber
                    privaten
                    Unternehmen.<br>Wir
                    beraten Sie
                    fachmännisch, ob sich
                    der Einsatz von
                    Photovoltaikelementen
                    oder Solarthermie
                    lohnen kann. </p>
                <h2>Leistungsüberblick</h2>
                <ul>
                    <li>
                        Installation
                        von
                        Photovoltaikanlagen
                    </li>
                    <li>
                        Stromspeicher
                        für
                        PV-Anlagen
                    </li>
                    <li>Anbringung
                        von
                        Solarthermen
                    </li>
                    <li>
                        Ausführliche
                        Beratung
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img
                        class="img-fluid"
                        src="{{asset('images/b33082c73d04e094512d4184ee20d49e_bossfightfreehighqualitystockimagesphotosphotographyplantwindow.jpg')}}"
                        alt=""
                >
            </div>
        </div>
        <h2>Was bedeutet Photovoltaik?</h2>
        <p>
            Photovoltaik wird als
            der Vorgang bezeichnet,
            in welchem mit Hilfe
            von Solarmodulen Strom
            aus Sonnenstrahlen
            gewonnen wird.<br>Ohne eigenen Stromspeicher wird
            die erzeugte Energie in der Regel in das
            öffentliche Stromnetz eingespeist, wofür Sie dann
            vom Energiebetreiber kompensiert werden. Der
            Hintergrund dafür ist der, dass der Strom direkt
            verbraucht werden muss. Ohne den genannten
            Stromspeicher kann der Strom nicht gespeichert
            werden.<br>Nicht
            nur die generell
            steigenden Strompreise
            ermutigen viele
            Hausbesitzer zur
            Installation von
            Photovoltaikanlagen.
            Photovoltaik erzeugt
            saubere Energie.
            Öko-Strom aus eigener
            Produktion sozusagen.
        </p>
        <h3>
            Voraussetzungen zum
            Betrieb von PV-Anlagen</h3>
        <p>
            Photovoltaik kann
            grundsätzlich so
            ziemlich überall zum
            Einsatz kommen. Ein
            Neigungswinkel zwischen
            20 und 30 Grad in
            Richtung Süden hat sich
            als ideal erwiesen.
            Dieser kann aber durch
            Gebrauch von&nbsp;Ausrichtungsmodulen&nbsp;angepasst
            werden. Somit steht dem
            Einsatz einer&nbsp;PV-Anlage&nbsp;selbst
            auf Flachdächern nichts
            im Wege.<br><br>Nicht überall in
            Deutschland ist die
            Sonneneinstrahlung
            gleich hoch. Trotzdem
            bieten alle
            Bundesländer
            ausreichend Sonne, um
            eine Photovoltaikanlage
            auch&nbsp;wirtschaftlich&nbsp;gesehen
            als sinnvoll zu
            betrachten.<br>Bitte beachten Sie
            auch, dass die
            Verlegung von
            zusätzlichen Kabeln in
            der Regel erforderlich
            ist. Nur so kann der
            Strom auch in das
            öffentliche Stromnetz
            eingespeist werden.<br><br>Eine Genehmigung ist
            normalerweise nicht
            erforderlich. Bitte
            beachten Sie aber
            Sonderfälle,
            beispielsweise bei
            Häusern die unter
            Denkmalschutz stehen.
            Auch können örtliche
            Bebauungspläne den
            Betrieb einschränken
            oder sogar verhindern.
            Ihre regionale
            Bauaufsichtsbehörde
            wird Ihnen beratend zur
            Seite stehen.
        </p>
        <h2>Was bedeutet Solarthermie?</h2>
        <p>
            Solarthermie bezeichnet
            den Vorgang von
            Erwärmung mit Hilfe von
            Sonnenenergie. Auf dem
            Dach installierte
            Kollektoren fangen die
            Sonnenergie ein und die
            Anlage erwärmt das
            Wasser im Kessel.
        </p>
        <h3>
            Welche Kollektoren sind
            die Richtigen für mich?</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Typ
                </th>
                <th>
                    Vorteile
                </th>
                <th>
                    Nachteile
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    Flachkollektor
                </td>
                <td>Robuste
                    Bauweise<br>Gutes
                    Preis-Leistungsverhältnis
                </td>
                <td>Hoher
                    Aufwand
                    bei
                    Flachdächern<br>Hoher
                    Platzbedarf
                </td>
            </tr>
            <tr>
                <td>
                    Hybridkollektor
                </td>
                <td>Nur
                    eine
                    Anlage
                    für
                    Strom
                    und
                    Wärme
                </td>
                <td>Hoher
                    Anschaffungspreis
                </td>
            </tr>
            <tr>
                <td>
                    Luftkollektor
                </td>
                <td>Geringe
                    Unterhaltungskosten<br>Kann
                    auch an
                    Fassaden
                    angebracht
                    werden
                </td>
                <td>
                    Spezielles
                    Heizungssystem
                    erforderlich
                </td>
            </tr>
            <tr>
                <td>
                    Röhrenkollektor
                </td>
                <td>Hohe
                    Leistung<br>Auch
                    im
                    Winter
                    ertragreich
                </td>
                <td>Hoher
                    Anschaffungspreis<br>Hohe
                    Unterhaltungskosten
                </td>
            </tr>
            <tr>
                <td>
                    Unverglaster
                    Kollektor
                </td>
                <td>
                    Niedriger
                    Anschaffungspreis
                </td>
                <td>Geringe
                    Leistung<br>Begrenztes
                    Einsatzgebiet
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
