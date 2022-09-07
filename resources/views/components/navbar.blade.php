<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false" id="categoriesDropdown">
                Categorie
            </a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                
                <li><a class="dropdown-item" href="{{ route('categoryShow', compact('category')) }}">{{ $category->category }}</a></li>
                
                <hr>
                
                @endforeach
                
            </ul>
        </li>
        
        <li class="nav-item">
            <a class="nav-link" href="{{ route('ad.create') }}">Inserisci Annuncio</a>
        </li>
        @guest
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Benvenuto Ospite
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
        Benvenuto {{ Auth::user()->name }}
    </a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Profilo</a></li>
        <li><a class="dropdown-item" href="#"
            onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Esci</a>
        </li>
        <form action="{{ route('logout') }}" id="form-logout" class="d-none" method="POST">
            @csrf
        </form>
    </ul>
</li>
@endguest
<li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
</li>
</ul>
<form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>
</div>
</div>
</nav>
