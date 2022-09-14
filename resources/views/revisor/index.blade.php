<x-layout>

<div class="container-fluid p-5 bg-gradient bg-revisor p-5 shadow d-flex flex-column align-items-center">

    <div class="row">
        <div class="col-12 text-light text-center mb-4">
            <h1 class="display-2 revisor-title">

                {{$ad_to_check ?  __('ui.adRevisor') : __('ui.noAds')}}
                
            </h1>

            @if(!$ad_to_check)
                <div class="occupazione"></div>
            @endif

        </div>
    </div>

        @if($ad_to_check)

    
        <div class="container-fluid bg-white d-flex flex-column align-items-center scontornamitutto pt-3">

            <div class="row justify-content-center">

                <div class="col-4 col-md-6 border lovogliobianco">

                    <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">

                            @if ($ad_to_check->images->count() >0)

                                <div class="carousel-inner">

                                    @foreach($ad_to_check->images as $image)

                                        <div class="carousel-item @if($loop->first)active @endif">
                                            <img src="{{$image->getUrl(400,300)}}" class="card-img-top" alt="">
                                        </div>

                                    @endforeach

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
        
                        <h5 class="card-title" style="font-weight: bold">Titolo: <span style="font-weight: 400">{{$ad_to_check->title}}</span></h5> 
                            <hr>
                        <p class="card-text" style="font-size: 20px; font-weight: bold">Descrizione:</p>
                            <p class="description-custom">{{$ad_to_check->description}}</p>
                        <hr>
                            <p class="card-footer text-center">Pubblicato il: {{$ad_to_check->created_at->format('d/m/Y')}} | Inserzionista: {{Auth::user()->name}} </p>  

                </div>



                    {{-- ZONA ICONCINE COLORATE REVISIONE --}}
                    <div class="col-4 d-flex flex-column border lovogliobianco">

                        {{-- ZONA REVISIONE CON PALLINI --}}
                        <div class="card-body d-flex align-items-center">

                            <span class="d-flex flex-column justify-content-start p-2">

                                <h5 class="tc-accent text-center">Revisione Immagini:</h5>

                                <p>Adulti: <span class="{{$image->adult}}"></span> </p>
                                <p>Medicina: <span class="{{$image->medical}}"></span> </p>
                                <p>Satira: <span class="{{$image->spoof}}"></span> </p>
                                <p>Violenza: <span class="{{$image->violence}}"></span> </p>
                                <p>Sexy: <span class="{{$image->racy}}"></span> </p>

                            </span>

                        </div>

                        <hr>

                        {{-- ZONA REVISIONE CON TAGS --}}
                        <div class="card-body d-flex align-items-center">
        
                            <div class="p-2">

                                <h5 class="tc-accent mt-3">Tags</h5>
                                
                                @if ($image->labels)
        
                                        @foreach ($image->labels as $label)
        
                                            <p class = 'd-inline'>{{$label}},</p>
        
                                        @endforeach
                                        
                                @endif
        
                            </div>
        
                        </div>
    
                    </div>

                    @else

                    <div>

                        <img src="{{Storage::url('/image/img_non_pervenuta.png')}}" class="img-fluid p-3 rounded" alt="img_missing">

                    </div>

            </div>

            <h5 class="card-title" style="font-weight: bold">Titolo: <span style="font-weight: 400">{{$ad_to_check->title}}</span></h5> 
                <hr>
            <p class="card-text" style="font-size: 20px; font-weight: bold">Descrizione:</p>
                <p>{{$ad_to_check->description}}</p>
            <hr>
                <p class="card-footer text-center">Pubblicato il: {{$ad_to_check->created_at->format('d/m/Y')}} | Inserzionista: {{Auth::user()->name}} </p>  

    </div>

                @endif

        </div>



        <div class="row mx-auto pt-3">

            <div class="col-6 col-md-6 mb-3">
                <form action="{{route('revisor.accept_ad',['ad'=>$ad_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">{{__('ui.accepted')}}</button>
                </form>
            </div>

            <div class="col-6 col-md-6 mb-3">
                <form action="{{route('revisor.reject_ad',['ad'=>$ad_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger shadow">{{__('ui.reject')}}</button>
                </form>
            </div>

        </div>

    </div>

    @endif

    </div>








</x-layout>

