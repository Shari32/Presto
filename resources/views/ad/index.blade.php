<x-layout>
 <x-header> Tutti gli annunci </x-header>

 <div class="container my-5">
        <div class="row justify-content-center">

            @foreach($ads as $ad)
                <div class="col-12 col-md-3">
                    <div class="card">
                        {{-- unisce la funzione isset() con l'operatore ternario --}}
                        <h5 class="card-title">{{ $ad->title }}</h5>
                        <img src="{{ Storage::url($ad->image) ?? 'https://picsum.photos/200/300' }}" class="card-img-top"
                            alt="{{ $ad->title }}">
                        <div class="card-body">
                            <h6 class="card-description fst-italic text-muted">{{ $ad->description }}</h6>
                            <hr>
                            <h5 class="card-price">{{ $ad->price }}€</h5>
                            <h5 class="card-category">{{ $ad->category->category }}</h5>
                            <hr>
                            <h5 class="card-user">Venditore: {{ $ad->user->name ?? 'sconosciuto' }}</h5>
                            <p class="card-footer">Pubblicato il: {{ $ad->created_at->format('d/m/Y') }}</p>
                            <hr>
                            <a href="{{ route('homepage')}}" class="btn btn-info mt-3">Torna alla home</a>
                        </div>
                    </div>
                </div>
          
            @endforeach
            {{$ads->links()}}

        </div>
    </div>






</x-layout>

