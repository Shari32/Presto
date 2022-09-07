<?php

namespace App\Http\Livewire;

use App\Models\ad;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AdCreateForm extends Component
{ 
    use WithFileUploads;
    
    public $title;
    public $description;
    public $image;
    public $price;
    public $category;
    
    protected $rules=[
      'title'=>'required|min:5',
      'description'=>'required|min:10',
      'image'=>'required',
      'price'=>'required',
      'category'=>'required',
    ];

    public function updated($propertyName) { 
        $this->validateOnly($propertyName); 
    }

    public function store(){
        $this->validate();

        Ad::create([
            'title'=> $this->title,
            'description'=> $this->description,
            'image'=> $this->image->store('public/image'),
            'price'=> $this->price,
            'category'=>$this->category,

            'user_id' => Auth::user()->id
        ]);

     $this->reset();
     session()->flash('message', 'Hai correttemente inserito il tuo annuncio');
    }


    public function render()
    {
        return view('livewire.ad-create-form');
    }


}
