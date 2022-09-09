<x-layout>

    <x-header>Presto.it</x-header>

    <div class="container my-5">
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

            @forelse($ads as $ad)
                <div class="col-12 col-md-3">
                    <div class="card-custom-image">
                        {{-- unisce la funzione isset() con l'operatore ternario --}}
                       
                        <img src="{{ Storage::url($ad->image) ?? 'https://picsum.photos/200/300' }}" class="card-img-top"
                            alt="{{ $ad->title }}">
                            <h5 class="card-custom-title text-center">{{ $ad->title }}</h5>
                            <div class="card-custom-body">
                            <p class="card-custom-description card-custom-footer fst-italic text-muted">{{ $ad->description }}</p>
                            <h6 class="card-custom-price"> Prezzo: {{ $ad->price }}€  </h6>
                            <p class="card-custom-category"> Categoria: {{ $ad->category->category }}</p>
                            <p class="card-custom-vendor text-center"> Venditore: {{ $ad->user->name ?? 'sconosciuto' }}</p>
                            <p class="card-custom-date text-center">Pubblicato il: {{ $ad->created_at->format('d/m/Y') }}</p>
                            <hr>
                            <a href="{{ route('ad.show', compact('ad')) }}" class="btn btn-info mt-3 d-flex justify-content-center">Dettaglio</a>
                        </div>
                    </div>
                </div>
            @empty
                <h2>Non ci sono ancora articoli</h2>
            @endforelse

        </div>
    </div>


</x-layout>

