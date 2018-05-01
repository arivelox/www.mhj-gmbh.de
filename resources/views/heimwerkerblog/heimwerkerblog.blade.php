@extends('layout.master')
@section('head')
    <title>Heimwerkerblog - {{config('app.name')}}</title>
@endsection
@section('content')
    <div class="container">
        <h1>Heimwerkerblog</h1>
        <p class="lead">
            Der MHJ Heimwerkerblog für Inspiration und Information. Immer mal
            wieder stellen wir hier Ihnen hier die neuesten Trends der Branchen
            Heizung, Sanitär, Solar und Elektro vor sowie praktische Tipps und
            Tricks für Arbeiten im eigenen Heim. Falls Sie Fragen oder
            Anregungen haben, freuen wir uns über eine <a
                    title="Kontaktaufnahme"
                    href="{{url('kontakt')}}"
            >Kontaktaufnahme</a>. </p>
        <ul class="list-group">
            <li class="list-group-item">
                <article>
                    <h2>
                        <a
                                title="GROHE FootControl Berührungslose Küchenarmaturen"
                                href="{{url('/heimwerkerblog/grohe-footcontrol-beruehrungslose-kuechenarmaturen')}}"
                        >
                            GROHE FootControl Berührungslose Küchenarmaturen
                        </a>
                    </h2>
                    <small class="text-monospace"><span class="mr-1">
                            <i
                                    class="fas fa-clock"
                            ></i>
                        </span>
                        <time>September 2, 2016</time>
                    </small>
                    <a
                            title="GROHE FootControl Berührungslose Küchenarmaturen"
                            class="btn btn-secondary float-right"
                            href="{{url('/heimwerkerblog/grohe-footcontrol-beruehrungslose-kuechenarmaturen')}}"
                    >Mehr lesen...</a>
                </article>
            </li>
            <li class="list-group-item">
                <article>
                    <h2>
                        <a
                                title="Berührungslose Armaturen"
                                href="{{url('/heimwerkerblog/beruehrungslose-armaturen')}}"
                        >
                            Berührungslose Armaturen
                        </a>
                    </h2>
                    <a
                            title="Berührungslose Armaturen"
                            class="btn btn-secondary float-right"
                            href="{{url('/heimwerkerblog/beruehrungslose-armaturen')}}"
                    >Mehr lesen...</a>
                    <small class="text-monospace"><span class="mr-1">
                            <i
                                    class="fas fa-clock"
                            ></i>
                        </span>
                        <time>August 29, 2016</time>
                    </small>
                </article>
            </li>
            <li class="list-group-item">
                <article>
                    <h2>
                        <a
                                title="Photovoltaik oder Solarthermie"
                                href="{{url('/heimwerkerblog/photovoltaik-oder-solarthermie')}}"
                        >
                            Photovoltaik oder Solarthermie
                        </a>
                    </h2>
                    <a
                            title="Photovoltaik oder Solarthermie"
                            class="btn btn-secondary float-right"
                            href="{{url('/heimwerkerblog/photovoltaik-oder-solarthermie')}}"
                    >Mehr lesen...</a>
                    <small class="text-monospace"><span class="mr-1">
                            <i
                                    class="fas fa-clock"
                            ></i>
                        </span>
                        <time>August 14, 2016</time>
                    </small>
                </article>
            </li>
            <li class="list-group-item">
                <article>
                    <h2>
                        <a
                                href="{{url('/heimwerkerblog/fugenlose-dusche')}}"
                                title="Fugenlose Dusche"
                        >
                            Fugenlose Dusche
                        </a>
                    </h2>
                    <a
                            title="Fugenlose Dusche"
                            class="btn btn-secondary float-right"
                            href="{{url('/heimwerkerblog/fugenlose-dusche')}}"
                    >Mehr lesen...</a>
                    <small class="text-monospace"><span class="mr-1">
                            <i
                                    class="fas fa-clock"
                            ></i>
                        </span>
                        <time>August 8, 2016</time>
                    </small>
                </article>
            </li>
        </ul>
    </div>
@endsection
