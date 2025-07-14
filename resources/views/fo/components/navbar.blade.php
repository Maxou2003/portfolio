    <nav>
        <div class="logo">Maxence<span class="text-secondary">.dev</span></div>
        <ul class="align-items-center">
            <li><a href="#about">À propos</a></li>
            <li><a href="#projects">Projets</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="{{ route('folio.create') }}"><button class="btn btn-primary text-secondary">
                        Créer un folio</button> </a></li>
            <li>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button class="btn btn-primary text-secondary" type="submit"> Déconnexion </button>
                </form>
            </li>
        </ul>
    </nav>
