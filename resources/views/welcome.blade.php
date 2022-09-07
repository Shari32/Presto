<x-layout>

    <x-header>Presto.it</x-header>


    <div class="container my-5">
        <div class="row justify-content-center">

            @forelse($ads as $ad)
                <div class="col-12 col-md-3">
                    <div class="card">
                        {{-- unisce la funzione isset() con l'operatore ternario --}}
                       
                        <img src="{{ Storage::url($ad->image) ?? 'https://picsum.photos/200/300' }}" class="card-img-top"
                            alt="{{ $ad->title }}">
                            <h5 class="card-title text-center">{{ $ad->title }}</h5>
                            <div class="card-body">
                            <p class="card-description card-footer fst-italic text-muted">{{ $ad->description }}</p>
                            <h6 class="card-price"> Prezzo: {{ $ad->price }}€  </h6>
                            <p class="card-category"> Categoria: {{ $ad->category->category }}</p>
                            <p class="card text-center"> Venditore: {{ $ad->user->name ?? 'sconosciuto' }}</p>
                            <p class="card text-center">Pubblicato il: {{ $ad->created_at->format('d/m/Y') }}</p>
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

