<x-layout>

    <x-header>{{$ad->title}}</x-header>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 mb-5">
                
                <hr>

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{Storage::url($ad->image)}}" class="d-block h-100 img-fluid" alt="{{ $ad->title }}">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/500/300" class="d-block h-100 img-fluid" alt="{{ $ad->title }}">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/500/400" class="d-block h-100 img-fluid" alt="{{ $ad->title }}">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

                <hr>

                <h2 class="fs-3 fw-bold">Prezzo: {{$ad->price}}€</h2>
            </div>
            <hr>
            <div class="col-12 col-md-8 my-5">
                <p class="fs-4">Descrizione:</p>
                <p class="fs-4">{{$ad->description}}</p>
                <hr>
                <p class="fs-4">Categoria: {{$ad->category->category}}</p>
                <hr>
                <p class="fs-4">Venditore: {{ $ad->user->name ?? 'sconosciuto' }}</p>

            </div>
            <div class="my-5 text-center">
                <a href="{{route('homepage')}}" class="btn btn-info">Torna indietro</a>
            </div>
        </div>
    </div>

</x-layout>

