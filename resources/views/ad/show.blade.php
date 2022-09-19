<x-layout>

  <x-header>{{$ad->title}}</x-header>

  <div class="container my-5 colore-inserzione container-border">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 mb-5">

        {{-- <hr> --}}


        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

        @if ($ad->images->count() >0)
          <div class="carousel-inner">
            @foreach($ad->images as $image)
         
            <div class="carousel-item @if($loop->first)active @endif">
              <img src="{{$image->getUrl(400,300)}}" class="card-img-top" alt="">
          </div>
            @endforeach
          </div>

          @else

            <div class=" d-flex justify-content-center">
                <img src="{{Storage::url('/image/img_non_pervenuta.png')}}" class="img-fluid p-3 rounded" alt="img_missing">
            </div>

         @endif
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        {{-- <hr> --}}
        <div class=" d-flex justify-content-center align-items-center ">
          <h2>Prezzo: </h2> <h2 class="badge card-custom-price text-wrap mt-2 ms-2"> {{ $ad->price }}€ </h2>
        </div>
        
      </div>
      <hr>
      <div class="col-12 col-md-8 my-5">
        <p class="fs-4 fw-bold">Descrizione:</p>
        <p class="fs-4 description-custom">{{$ad->description}}</p>
        <hr>
        <p class="fs-4 fw-bold">Categoria: <span class="fw-normal"> {{$ad->category->category}} </span> </p>
        <hr>
        <p class="fs-4 fw-bold">Venditore: <span class="fw-normal">{{Auth::user()->name ?? 'Sconosciuto' }}</span> </p>

      </div>
      <div class="my-5 text-center">
        <a href="{{route('homepage')}}" class="btn btn-revisore">Torna indietro</a>
      </div>
    </div>
  </div>

</x-layout>

