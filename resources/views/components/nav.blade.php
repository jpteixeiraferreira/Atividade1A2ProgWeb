<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('contato.inicio') ? 'active' : '' }}" aria-current="page" href="/">Início</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('contato.form.novo') ? 'active' : '' }}" href="#sobre">Sobre</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('contato.listagem') ? 'active' : '' }}" href="/listar">Listar</a>
            </li>
        </ul>
        </div>
    </div>
</nav> 