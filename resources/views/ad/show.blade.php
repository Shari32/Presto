<x-layout>

  

  <div class="container  colore-inserzione container-border my-5 ">
    <div class="row justify-content-center align-items-center">
      <div class="col-12 col-md-6 ">

        {{-- <hr> --}}


        <div id="carouselExampleControls" class="carousel slide my-5" data-bs-ride="carousel">

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
      
        
      </div>

      <div class="col-12 col-md-6 ">
       <div class="d-flex align-items-center justify-content-between" >
          <h2 class="text-wrap description-custom">{{$ad->title}}</h2>
          <!-- <div class="d-flex justify-content-end "> -->

            <h2 class="badge card-custom-price  fw-bold text-center text-wrap p-2"> {{ $ad->price }}€ </h2>
            
          <!-- </div> -->
      
       </div>

      <hr>
        <p class="fs-4 fw-bold">Descrizione:</p>
        <p class="fs-4 description-custom">{{$ad->description}}</p>
        <hr>
      
          
          <p class="fs-4 fw-bold ms-5 ">Categoria: <span class="fw-normal me-5"> {{$ad->category->category}} </span>   Venditore: <span class="fw-normal ">{{$ad->user->name ?? 'Sconosciuto' }}</span> </p>
        
        <hr>
       
        <div class="text-center d-flex justify-content-end ">
        <a href="{{route('homepage')}}" class="btn btn-revisore  fs-5">Torna indietro</a>
      </div>
      </div>
      
    </div>
  </div>

      <hr>

</x-layout>

