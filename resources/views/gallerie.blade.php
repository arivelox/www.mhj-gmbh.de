@extends('layout.master')
@section('head')
    <title>Gallerie - {{config('app.name')}}</title>
@endsection
@section('content')
    <section
            id="gallerie"
            class="d-flex flex-column text-center text-white mx-auto justify-content-center"
    >
        <h1>Gallerie</h1>
        <p class="lead">Wir bitten Sie um ein bisschen mehr Geduld.<br>
            Hier wird noch gearbeitet.</p>
        <div class="mx-auto d-block">
            <div class="divider bg-primary"></div>
        </div>
        <img
                class="img-fluid mx-auto d-block"
                src="{{asset('images/b1a09fca240ec6c789724e7536df0367_home.png')}}"
                alt=""
        >
        <p class="lead">
            Wir arbeiten mit Hochdruck an der
            Zusammensetzung der Seiteninhalte.<br>Schon
            bald präsentieren wir Ihnen hier die
            Prunkstücke der Montage- und Haustechnik
            GmbH.<br><br>Werfen Sie doch in der
            Zwischenzeit einen Blick auf unseren <a
                    title="Heimwerkerblog"
                    href="{{url('heimwerkerblog')}}"
            >Heimwerkerblog</a> und lassen Sie sich
            inspirieren.
            <br>Gerne laden wir Sie vorab zu einem
            persönlichen Gespräch ein: <a
                    title="Kontakt"
                    href="{{url('kontakt')}}"
            >Kontakt</a>
        </p>
    </section>
@endsection