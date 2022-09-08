<x-layout>

<div class="container-fluid p-5 bg-gradient bg-success p-5 shadow mb-4">

    <div class="row">
        <div class="col-12 text-light">
            <h1 class="display-2">
                {{$ad_to_check ? 'Annuncio da revisionare:' : 'Non ci sono annunci da revisionare.'}}
            </h1>
        </div>
    </div>

    @if($ad_to_check)

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">

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

                    <h5 class="card-title">Titolo: {{$ad_to_check->title}}</h5>
                    <p class="card-text">Descrizione: {{$ad_to_check->description}}</p>
                    <p class="card-footer">Pubblicato il: {{$ad_to_check->created_at->format('d/m/Y')}}</p>

                </div>

            </div>

            <div class="row">

                <div class="col-12 col-md-6">
                    <form action="{{route('revisor.accept_ad',['ad'=>$ad_to_check])}}" method="POST">
                        @csrf
                        @method('PATCH')
                            <button type="submit" class="btn btn-success shadow">Accetta</button>
                    </form>
                </div>

                <div class="col-12 col-md-6">
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