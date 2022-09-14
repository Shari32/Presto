<x-layout>

    <x-header>{{__('ui.expCategory')}}: {{$category->category}}</x-header>

    <div class="container my-5">
        <div class="row justify-content-center">

            @forelse($category->ads as $ad)
                <div class="col-12 col-md-3">
                    <div class="card">
                        {{-- unisce la funzione isset() con l'operatore ternario --}}
                        
                        <img src="{{!$ad->images()->get()->isEmpty() ? Storage::url($ad->images()->first()->path) :'https://picsum.photos/200'}}" class="card-img-top"
                        alt="{{ $ad->title }}">
                        <h5 class="card-title">{{ $ad->title }}</h5>
                        <div class="card-body">
                            <h6 class="card-description fst-italic text-muted">{{ $ad->description }}</h6>
                            <hr>
                            {{-- <p class="my-3">Redatto da: <span class="fst-italic text-muted">{{$ad->user->name ?? 'Sconosciuto'}}</span></p> --}}
                            <h5 class="card-price">Prezzo: {{ $ad->price }}</h5>
                            <h5 class="card-category">Categoria: {{ $ad->category->category }}</h5>
                            <hr>
                            <h5 class="card-user">Venditore: {{ $ad->user->name ?? 'sconosciuto' }}</h5>
                            <p class="card-footer">Pubblicato il: {{ $ad->created_at->format('d/m/Y') }}</p>
                            <hr>
                            <a href="{{ route('ad.show', compact('ad')) }}" class="btn btn-info mt-3">Leggi</a>
                        </div>
                    </div>
                </div>
            @empty
                <h2>{{__('ui.noAds')}}</h2>
                
            @endforelse

        </div>
    </div>


</x-layout>