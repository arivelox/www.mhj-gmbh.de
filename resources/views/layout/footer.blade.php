<footer id="footer" class="bg-secondary pl-3 pt-3 pr-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block">
                <nav class="nav nav-pills d-inline-block">
                    <a
                            class="text-white d-md-block"
                            title="Ihr Sanitärfachmann aus Barkelsby"
                            href="{{url('leistungen/sanitaer')}}"
                    >Sanitär</a>
                    <a
                            class="text-white d-md-block"
                            title="Ihr Heizungsbauer aus Barkelsby"
                            href="{{url('leistungen/heizung')}}"
                    >Heizung</a>
                    <a
                            class="text-white d-md-block"
                            title="Ihr Elektromeister aus Barkelsby"
                            href="{{url('leistungen/elektro')}}"
                    >Elektro</a>
                    <a
                            class="text-white d-md-block"
                            title="Ihr Solartechniker aus Barkelsby"
                            href="{{url('leistungen/solar')}}"
                    >Solar</a>
                    <a
                            class="text-white" title="Marken"
                            href="{{url('marken')}}"
                    >Marken</a>
                </nav>
            </div>
            <div class="col-lg-6 text-center">
                <div
                        class="embed-responsive embed-responsive-21by9"
                >
                    <iframe
                            class="embed-responsive-item"
                            src="{{config('app.googleMapsCoords')}}"
                    ></iframe>
                </div>
                <p class="text-white">
                    2016-2018
                    {{config('app.nameLong')}}</p>
            </div>
            <div class="col-lg-3 text-center text-lg-right">
                <a
                        class="text-huge"
                        href="{{url('kontakt')}}"
                        title="Kontakt"
                >
                    <i class="fas fa-phone-square text-white"></i>
                </a>
                <a
                        class="d-block" title="Impressum"
                        href="{{url('impressum')}}"
                >
                    Impressum</a>
            </div>
        </div>
    </div>
</footer>
