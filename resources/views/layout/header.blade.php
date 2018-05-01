<header id="header" class="container">
    <nav class="navbar navbar-expand-md navbar-light mb-lg-3">
        <a class="navbar-brand" href="{{url('/')}}">
            <img
                    src="{{asset('images/c4f380ad62146aca25b7e49586f0a8ef_logo.gif')}}"
                    alt="Montage- und Haustechnik MHJ GmbH"
            >
        </a>
        <p class="navbar-text w-100 d-none d-lg-block">
            <span class="font-weight-bold">04351 - 475 401</span>
            <br>
            <span>Montag - Freitag 08:00 - 16:30</span>
        </p>

        <button
                class="navbar-toggler bg-light" type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div
                class="collapse navbar-collapse" id="navbarSupportedContent"
        >
            <ul class="navbar-nav">
                <li class="nav-link">
                    <a
                            title="Der Blog für Heimwerker - MHJ GmbH"
                            href="{{url('heimwerkerblog')}}"
                    >Heimwerkerblog<span
                                class="sr-only"
                        >(current)</span></a>
                </li>
                <li class="nav-link">
                    <a
                            title="Gallerie - MHJ GmbH"
                            href="{{url('gallerie')}}"
                    >Gallerie</a>
                </li>
                <li class="nav-link">
                    <a
                            title="Leistungen - MHJ GmbH"
                            href="{{url('leistungen')}}"
                    >Leistungen</a>
                </li>
                <li class="nav-link">
                    <a
                            title="Kontakt - MHJ GmbH"
                            href="{{url('kontakt')}}"
                    >Kontakt</a>
                </li>
            </ul>
        </div>
    </nav>
    <p class="d-lg-none">
        <span class="font-weight-bold">04351 - 475 401</span> <span
                class="float-right"
        >Mo. – Fr. 08:00 - 16:30</span>
    </p>
</header>
