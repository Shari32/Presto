<x-layout>
    <x-header> Tutti gli annunci </x-header>

    <div class="container my-5">
        <div class="row justify-content-center">

            @forelse ($ads as $ad)
            <div class="col-12 col-md-3 mb-3">
                <div class="card">
                    {{-- unisce la funzione isset() con l'operatore ternario --}}
                    <div class="card-custom-image">
                        <img src="{{ Storage::url($ad->image) ?? 'https://picsum.photos/200/300' }}" class="card-img-top" alt="{{ $ad->title }}">
                        <span class="d-flex justify-content-center">
                            <p class="badge card-custom-price text-wrap"> {{ $ad->price }}€ </p>
                        </span>
                    </div>
                    <hr class="mt-0">
                    <h5 class="text-center">{{ $ad->title }}</h5>
                    <div>
                        <p class="fst-italic dark-blue-text text-center">{{ $ad->description }}</p>
                        <p class="text-center"> Categoria: {{ $ad->category->category }}</p>
                        <a href="{{ route('ad.show', compact('ad')) }}" class="btn btn-info mt-3 mb-2 mx-2 d-flex justify-content-center">Dettaglio</a>
                    </div>
                </div>
            </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning py-3 shadow">
                        <p class="lead">Non ci sono annunci per questa ricerca. Prova a cambiare ricerca</p>
                    </div>
                </div>
            @endforelse
            {{ $ads->links() }}

        </div>
    </div>






</x-layout>
