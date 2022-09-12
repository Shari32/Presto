<?php

namespace App\Http\Livewire;

use App\Models\Ad;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AdCreateForm extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $temporary_images;
    public $image;
    public $images=[];
    public $price;
    public $category;
    public $form_id;
    public $ad;

    protected $rules = [
        'title' => 'required|min:5',
        'description' => 'required|min:10',
        'price' => 'required|numeric',
        'category' => 'required',
        'images.*'=>'image|max:1024',
        'temporary_images.*'=>'image|max:1024' 

    ];
    public $messages=[
        'required'=> 'Il campo  :attribute è richiesto',
        'min'=>'Il campo  :attribute è troppo corto',
        'temporary_images.required'=> 'L\' immagine è richiesta',
        'temporary_images.*.image'=>' I file devono essere immagini',
        'temporary_images.*.max'=>'L\'immagine dev\'essere massimo di 1mb',
        'images.image'=> 'L\'immagine dev\'essere un\'immagine',
        'immages.max'=>'L\'immagine dev\'essere massimo di 1mb',
    ];

    public function updatedTemporaryImages(){
        
        if($this->validate([
            'temporary_images.*'=> 'image|max:1024'
        ])){
            // dd('ce un immagine');
            foreach($this->temporary_images as $image){
                $this->images[]= $image;
            }
        }
    }

    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {

        $this->validate();

        $category = Category::find($this->category);
        
        $ad = $category->ads()->create([
            
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'user_id' => Auth::user()->id
            
        ]);
        
        if(count($this->images)){
            foreach($this->images as $image){
                $ad->images()->create(['path'=> $image->store('images','public')]);
            }
        }
        Auth::user()->ads()->save($ad);

        $this->reset();
        session()->flash('message', 'Hai correttemente inserito il tuo annuncio, sarà pubblicato dopo la revisione ');
    }

    public function cleanForm()
    {
        $this->title = '';
        $this->description = '';
        $this->price = '';
        $this->category = '';
        $this->images=[];
        $this->temporary_images=[];
     

    }

    public function render()
    {
        return view('livewire.ad-create-form');
    }
}
