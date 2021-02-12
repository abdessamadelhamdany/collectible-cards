<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Livewire\Component;

class CardList extends Component
{
    public $query;
    public $cards;

    public function mount()
    {
        $this->query = '';
        $this->cards = Card::all();
    }

    public function search()
    {
        $this->cards = Card::where('title', 'like', '%' . $this->query . '%')
            ->get();
    }

    public function render()
    {
        return view('livewire.card-list');
    }
}
