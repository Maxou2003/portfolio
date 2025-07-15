    <nav>
        <div class="d-flex align-items-center">
            <div class="logo">
                <a class="text-secondary" href="{{ route('home') }}">Folium</a>
            </div>
            <ul>
                <li><a href="#about">À propos</a></li>
                <li><a href="#projects">Projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

        <ul class="d-flex align-items-center">
            <li>
                <a href="{{ route('folio.create') }}">
                    @include('fo.components.form-btn', [
                        'buttonText' => ' <ion-icon name="add-outline"></ion-icon> Créer un folio',
                    ])
                </a>
            </li>

            <li>
                <a href="{{ route('home') }}" class="d-flex align-items-center">
                    <ion-icon class="fs-4" name="notifications-outline"></ion-icon>
                </a>
            </li>
            @auth
                <li>
                    <div class="user-initial">
                        {{ strtoupper(Auth::user()->name[0]) }}
                    </div>
                </li>
            @endauth
        </ul>
    </nav>
