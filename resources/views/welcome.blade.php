<x-layout>
    
    <x-header>Presto.it</x-header>
    
    
    <div class="container my-5">
        <div class="row justify-content-center">

            @forelse($ads as $ad)
                <div class="col-12 col-md-3">
                    <div class="card">
                        {{-- unisce la funzione isset() con l'operatore ternario --}}
                        <h5 class="card-title">{{$ad->title}}</h5>
                        <img src="{{Storage::url($ad->image) ?? 'https://picsum.photos/200/300'}}" class="card-img-top" alt="{{$ad->title}}">
                        <div class="card-body">
                          <h6 class="card-description fst-italic text-muted">{{$ad->description}}</h6>
                          <hr>
                          {{-- <p class="my-3">Redatto da: <span class="fst-italic text-muted">{{$ad->user->name ?? 'Sconosciuto'}}</span></p> --}}
                          <h5 class="card-price">{{$ad->price}}</h5>
                          <h5 class="card-category">{{$ad->category}}</h5>
                          <hr>
                          <a href="{{route('ad.show', compact('ad'))}}" class="btn btn-info mt-3">Leggi</a>
                        </div>
                    </div>
                </div>
            @empty
                <h2>Non ci sono ancora articoli</h2>
            @endforelse

        </div>
    </div>

        
    </x-layout>
    
    


    