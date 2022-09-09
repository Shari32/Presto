<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand nav-link" href="{{route('homepage')}}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('ad.index')}}">Tutti gli annunci</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu bg-dropDown" aria-labelledby="navbarDropdown">
                        @foreach($categories as $category)
                        <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->category}}</a></li>
                        <hr>
                        @endforeach
                    </ul>
                </li>
            </ul>
            @guest
            <li class="nav-item dropdown nav-link">
                <a class="nav-link dropdown-toggle me-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end bg-dropDown" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>
                    <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                </ul>
            </li>
            @else
            <li class="nav-item dropdown nav-link">
                <a class="nav-link dropdown-toggle me-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end bg-dropDown" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{route('ad.create')}}">Inserisci annuncio</a></li>
                    <li><a class="dropdown-item" href="#"
                        onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Esci</a>
                    </li>
                    <form action="{{ route('logout') }}" id="form-logout" class="d-none" method="POST">
                        @csrf
                    </form>
                </ul>
            </li>
            @if (Auth::user()->is_revisor)
            <li class="nav-item nav-link me-5">
                <a class="nav-link btn btn-sm position-relative" aria-current="page"
                    href="{{ route('revisor.index') }}">
                    Zona Revisore
                    <span
                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-pallino">
                        {{ App\Models\Ad::toBeRevisionedCount() }}
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </a>
            </li>
            @endif
            @endguest
            <form id="padre" class="d-flex" role="search" action="{{route('ads.search')}}" method="GET">
                
                <input id="formCustom" class="form-control margine me-2 bg-searchBar" name="searched" type="search" placeholder="Search" aria-label="Search">
                
            </form>
            
            <button id="searchButton" class="btn-custom" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </div>
</nav>