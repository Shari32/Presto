<div class="container-fluid d-flex justify-content-end">
    <a style="text-decoration:none; color:var(--customDeadG)" class="d-flex align-items-center text-center nav-link"
        href="{{ route('homepage') }}">Presto.it
    </a>
    <div class="container">
        <nav class="nav justify-content-evenly text-center">
            <a class="nav-link" href="{{ route('ad.index') }}">Tutti gli annunci</a>
        </nav>

        <li class="nav-item dropdown nav-link d-flex justify-content-center">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                @foreach ($categories as $category)
                <li>
                <a class="dropdown-item"href="{{ route('categoryShow', compact('category')) }}">{{ $category->category }}</a>
                </li>
                <hr>

                @endforeach
            </ul>
        </li>

    </div>

    @guest

            <li class="nav-item dropdown nav-link">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    <i class="fa-solid fa-user"></i>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                    <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>

                </ul>
            </li>

        @else
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span> <i class="fa-solid fa-user"></i> {{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('ad.create')}}">Inserisci Annuncio</a></li>

                <li><a class="dropdown-item" href="#"
                        onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Esci</a>
                </li>
                <form action="{{ route('logout') }}" id="form-logout" class="d-none" method="POST">
                    @csrf
                </form>
            </ul>
        </li>

        @if (Auth::user()->is_revisor)
            <li class="nav-item">
                <a class="nav-link btn btn-outline-success btn-sm position-relative" aria-current="page"
                    href="{{ route('revisor.index') }}">
                    Zona Revisore
                    <span
                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ App\Models\Ad::toBeRevisionedCount() }}
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </a>
            </li>
        @endif

        @endguest
    
</div>
