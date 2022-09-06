<?php

namespace App\Http\Livewire;

use App\Models\ad;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdCreateForm extends Component
{ 
    use WithFileUploads;
    
    public $title;
    public $description;
    public $image;
    public $price;
    public $category;
    
    protected $rules=[
      'title'=>'required',
      'description'=>'required',
      'image'=>'required',
      'price'=>'required',
      'category'=>'required',

    ];


    public function store(){
        $this->validate();

        Ad::create([
            'title'=> $this->title,
            'description'=> $this->description,
            'image'=> $this->image->store('public/image'),
            'price'=> $this->price,
            'category'=>$this->category
        ]);

     $this->reset();
     session()->flash('message', 'Hai correttemente inserito il tuo annuncio');
    }


    public function render()
    {
        return view('livewire.ad-create-form');
    }


}
