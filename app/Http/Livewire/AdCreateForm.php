<?php

namespace App\Http\Livewire;

use App\Models\ad;
use Livewire\Component;
use App\Models\Category;
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

    protected $rules = [
        'title' => 'required|min:5',
        'description' => 'required|min:10',
        'image' => 'required',
        'price' => 'required | numeric',
        'category' => 'required'
    ];

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
            'image' => $this->image->store('public/image'),
            'price' => $this->price,
            'user_id' => Auth::user()->id

        ]);

        Auth::user()->ads()->save($ad);

        $this->reset();
        session()->flash('message', 'Hai correttemente inserito il tuo annuncio');
    }

    public function cleanForm()
    {
        $this->title = '';
        $this->description = '';
        $this->image = '';
        $this->price = '';
        $this->category = '';
    }

    public function render()
    {
        return view('livewire.ad-create-form');
    }
}
