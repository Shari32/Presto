<x-layout>

<div class="container-fluid p-5 bg-gradient bg-revisor p-5 shadow">

    <div class="row">
        <div class="col-12 text-light text-center mb-4">
            <h1 class="display-2 revisor-title">
                {{$ad_to_check ? 'Annuncio da revisionare:' : 'Non ci sono annunci da revisionare.'}}
            </h1>
        </div>
    </div>

    @if($ad_to_check)

    
        <div class="container bg-white d-flex flex-column align-items-center">

            <div class="row">

                <div class="col-12">

                    <div id="showCarousel" class="carousel slide mt-3" data-bs-ride="carousel">

                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <img src="https://picsum.photos/id/27/1200/400" class="img-fluid p-3 rounded" alt="...">
                            </div>

                            <div class="carousel-item">
                                <img src="https://picsum.photos/id/27/1200/400" class="img-fluid p-3 rounded" alt="...">
                            </div>

                            <div class="carousel-item">
                                <img src="https://picsum.photos/id/27/1200/400" class="img-fluid p-3 rounded" alt="...">
                            </div>

                        </div>

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

            <div class="row">

                <div class="col-6 col-md-6 mb-3">
                    <form action="{{route('revisor.accept_ad',['ad'=>$ad_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                            <button type="submit" class="btn btn-success shadow me-3">Accetta</button>
                    </form>
                </div>

                <div class="col-6 col-md-6 mb-3">
                    <form action="{{route('revisor.reject_ad',['ad'=>$ad_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                            <button type="submit" class="btn btn-danger shadow ms-3">Rifiuta</button>
                    </form>
                </div>

            </div>

        </div>

    @endif

</div>








</x-layout>