<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="{{ route('main') }}">
        <img src="{{ asset('images/logo-nav.png') }}">
        Black Horse Team
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('riding') }}">Jazda konna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pensjonat dla koni</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Klub Jeździecki</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Transport Koni</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Treningi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kontakt</a>
            </li>
        </ul>
    </div>
</nav>