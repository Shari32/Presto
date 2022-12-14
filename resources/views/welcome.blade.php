<x-layout>

    <x-header>{{ __('ui.welcome') }}</x-header>
   
    <div class="container-fluid my-5">
        <div class="row justify-content-center">

            @if(session()->has('access.denied'))
                <div class="alert alert-danger">
                    {{ session()->get('access.denied') }}
                </div>
            @endif

            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif



            <div class="boxColor"></div>

            @forelse($ads as $ad)
                <div class="col-12 col-md-3 mb-3 mx-5 px-5 d-flex justify-content-center">
                    <div class="card px-3 py-3 my-3 shadow-lg">
                        {{-- unisce la funzione isset() con l'operatore ternario --}}
                        <div class="card-custom-image">
                        <img src="{{!$ad->images()->get()->isEmpty() ? $ad->images()->first()->getUrl(400,300) : Storage::url('/image/img_non_pervenuta.png')}}" class="card-img-top"
                            alt="{{ $ad->title }}">
                            <span class="d-flex justify-content-center">
                                <p class="badge card-custom-price p-2 fw-bold text-wrap mt-3"> {{ $ad->price }}€ </p>
                            </span>
                        </div>
                        <hr class="mt-0">
                        <h5 class="text-center">{{ $ad->title }}</h5>
                        <div>
                            <p class="fst-italic dark-blue-text text-center description-card-custom">{{ $ad->description }}</p>
                            <p class="text-center"> Categoria: {{ $ad->category->category }}</p>
                            <a href="{{ route('ad.show', compact('ad')) }}" class="btn btn-revisore fs-5 mt-3 mb-2 mx-2 d-flex justify-content-center">Dettaglio</a>
                        </div>
                    </div>
                </div>
            @empty
                <h2 class="box-titolo">{{__('ui.noAds')}}</h2>
            @endforelse

        </div>
    </div>


</x-layout>

