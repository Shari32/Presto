<x-layout>

    <x-header>{{$ad->title}}</x-header>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 mb-5">
                <img src="{{Storage::url($ad->image) ?? 'https://picsum.photos/200/300'}}" alt="{{$ad->title}}" class="img-fluid">
                <h2 class="fs-3 fw-bold">{{$ad->price}}</h2>
            </div>
            <hr>
            <div class="col-12 col-md-8 my-5">
                <p class="fs-4">{{$ad->description}}</p>
                <hr>
                <p class="fs-4">{{$ad->category}}</p>
            </div>
            <div class="my-5 text-center">
                <a href="{{route('homepage')}}" class="btn btn-info">Torna indietro</a>
            </div>
        </div>
    </div>

</x-layout>