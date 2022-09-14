<x-layout>

    <x-header>{{$category->category}}</x-header>

    <div class="container my-5">
        <div class="row justify-content-center">

            @forelse($category->ads as $ad)
            <div class="col-12 col-md-3 mb-3 mx-5 px-5 d-flex justify-content-center">
                <div class="card px-3 py-3 my-3 shadow-lg">
                    {{-- unisce la funzione isset() con l'operatore ternario --}}
                    <div class="card-custom-image">
                    <img src="{{!$ad->images()->get()->isEmpty() ? $ad->images()->first()->getUrl(400,300) :'https://picsum.photos/200'}}" class="card-img-top"
                        alt="{{ $ad->title }}">
                        <span class="d-flex justify-content-center">
                            <p class="badge card-custom-price text-wrap mt-3"> {{ $ad->price }}€ </p>
                        </span>
                    </div>
                    <hr class="mt-0">
                    <h5 class="text-center">{{ $ad->title }}</h5>
                    <div>
                        <p class="fst-italic dark-blue-text text-center">{{ $ad->description }}</p>
                        <p class="text-center"> Categoria: {{ $ad->category->category }}</p>
                        <a href="{{ route('ad.show', compact('ad')) }}" class="btn btn-revisore mt-3 mb-2 mx-2 d-flex justify-content-center">Dettaglio</a>
                    </div>
                </div>
            </div>
            @empty
                <h2>{{__('ui.noAds')}}</h2>
                
            @endforelse

        </div>
    </div>


</x-layout>