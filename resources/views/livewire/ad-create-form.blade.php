<div>

    <form wire:submit.prevent="store">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 box mb-5">



                    <x-session-messages />
                    @csrf


                    <div class="mb-3 mt-3">

                        <label for="title" class="form-label">Titolo Annuncio</label>
                        <input type="text" name="title" wire:model="title" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleHelp">
                        @error('title')
                        <span class="fst-italic small text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="mb-3">

                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" wire:model="description" name="description" id="description" rows="7"></textarea>
                        @error('description')
                        <span class="fst-italic small text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    

                    <div class="mb-3">

                        <label for="price" class="form-label">Prezzo €</label>
                        <input type="number" name="price" wire:model="price" min="0.00" max="100000.00" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" aria-describedby="priceHelp">
                        @error('price')
                        <span class="fst-italic small text-danger">{{ $message }}</span>
                        @enderror
                    </div>



                    <div class="mb-3">

                        <label for="category" class="form-label">Categoria</label>
                        <select wire:model.defer="category" id="category" class="form-control">
                            <option value="">Scegli Categoria</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->category }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                      
                    <input wire:model="temporary_images" type="file" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror">
                        @error('temporary_images.*')
                        <span class="fst-italic small text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    @if(!empty($images))
                    <div class="row">
                        <div class="col-12">
                            <p>Photo preview:</p>
                            <div class="row border border-4 border-info rounded shadow py-4">
                                @foreach($images as $key=> $image)
                                <div class="col my-3">
                                    <div class="img-preview  mx-auto shadow rounded " style="  background-image: url({{$image->temporaryUrl()}}); " ></div>
                                    <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">Cancella</button>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif


                    <button type="submit" class="btn bg-btn my-3">Inserisci annuncio</button>
    </form>
</div>

</div>
</div>
</div>
 