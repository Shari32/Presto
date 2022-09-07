<div>

    <form wire:submit.prevent="store">

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">



                    <x-session-messages />
                    @csrf


                    <div class="mb-3">

                        <label for="title" class="form-label">Titolo Annuncio</label>
                        <input type="text" name="title" wire:model="title"
                            class="form-control @error('title') is-invalid @enderror" id="title"
                            aria-describedby="titleHelp">
                        @error('title')
                            <span class="fst-italic small text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="mb-3">

                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" wire:model="description" name="description"
                            id="description" rows="7"></textarea>
                        @error('description')
                            <span class="fst-italic small text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="file" name="image" wire:model="image"
                            class="form-control @error('image') is-invalid @enderror" id="image"
                            aria-describedby="imageHelp">
                        @error('image')
                            <span class="fst-italic small text-danger">{{ $message }}</span>
                        @enderror
                    </div>



                    <div class="mb-3">

                        <label for="price" class="form-label">Prezzo</label>
                        <input type="text" name="price" wire:model="price"
                            class="form-control @error('author') is-invalid @enderror" id="price"
                            aria-describedby="priceHelp">
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








                    <button type="submit" class="btn btn-warning">Invia!</button>
    </form>
</div>

</div>
</div>
</div>
