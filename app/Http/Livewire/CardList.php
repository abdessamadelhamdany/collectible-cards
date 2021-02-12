<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Livewire\Component;

class CardList extends Component
{
    public function render()
    {
        $cards = Card::query();

        return view('livewire.card-list', [
            'cards' => $cards->get()
        ]);
    }
}
