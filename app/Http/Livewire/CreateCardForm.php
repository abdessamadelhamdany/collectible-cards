<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Livewire\Component;

class CreateCardForm extends Component
{
    public $title;
    public $brand_name;
    public $category;
    public $release_name;
    public $year;

    protected $rules = [
        'title' => 'required|string',
        'brand_name' => 'required|string',
        'category' => 'required|string',
        'release_name' => 'required|string',
        'year' => 'required|digits:4|integer|min:1900|max:2021'
    ];

    public function submit()
    {
        $this->validate();

        request()->user()->cards()->save(new Card([
            'title' => $this->title,
            'brand_name' => $this->brand_name,
            'category' => $this->category,
            'release_name' => $this->release_name,
            'year' => $this->year,
        ]));

        return redirect()->to('/cards');
    }

    public function render()
    {
        return view('livewire.create-card-form');
    }
}
