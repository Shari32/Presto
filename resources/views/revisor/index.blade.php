<x-layout>

<div class="container-fluid p-5 bg-gradient bg-revisor p-5 shadow">

    <div class="row">
        <div class="col-12 text-light text-center mb-4">
            <h1 class="display-2 revisor-title">
                {{$ad_to_check ? 'Annuncio da revisionare:' : 'Non ci sono annunci da revisionare.'}}
            </h1>
            <div class="space"></div>
        </div>
    </div>

        @if($ad_to_check)

    
        <div class="container bg-white d-flex flex-column align-items-center">

            <div class="row">

                <div class="col-12">

                <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                        @if($ad_to_check->images)
                        <div class="carousel-inner">
                            @foreach($ad_to_check->images as $image)
                            <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{ Storage::url($ad->path) ?? 'https://picsum.photos/200/300' }}" class="card-img-top"
                            alt="{{ $ad->title }}">
                            </div>
                            @endforeach
                        </div>
                        @else

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/200/300" class="img-fluid p-3 rounded" alt="...">
                        </div>

                        <div class="carousel-item ">
                            <img src="https://picsum.photos/200/300" class="img-fluid p-3 rounded" alt="...">
                        </div>

                        <div class="carousel-item ">
                            <img src="https://picsum.photos/200/300" class="img-fluid p-3 rounded" alt="...">
                        </div>
                    </div>
                </div>
                    @endif
                    <button class="carousel-control-prev" type="button" data-bs-target='#showCarousel' data-bs-slide='prev'>
                        <span class="carousel-control-prev-icon" aria-hidden='true'></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                        <button class="carousel-control-next" type="button" data-bs-target='#showCarousel' data-bs-slide='next'>
                            <span class="carousel-control-next-icon" aria-hidden='true'></span>
                            <span class="visually-hidden">Next</span>
                        </button>

                    </div>

                <h5 class="card-title" style="font-weight: bold">Titolo: <span style="font-weight: 400">{{$ad_to_check->title}}</span></h5> 
                    <hr>
                <p class="card-text" style="font-size: 20px; font-weight: bold">Descrizione:</p>
                    <p>{{$ad_to_check->description}}</p>
                <hr>
                    <p class="card-footer text-center">Pubblicato il: {{$ad_to_check->created_at->format('d/m/Y')}} | Inserzionista: </p>

            </div>

        </div>

        <div class="row mx-auto">

            <div class="col-6 col-md-6 mb-3">
                <form action="{{route('revisor.accept_ad',['ad'=>$ad_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">Accetta</button>
                </form>
            </div>

            <div class="col-6 col-md-6 mb-3">
                <form action="{{route('revisor.reject_ad',['ad'=>$ad_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                </form>
            </div>

        </div>

    </div>

    @endif

    </div>








</x-layout>