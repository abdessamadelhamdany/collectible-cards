<?php

namespace App\Http\Livewire;

use App\Models\Card;
use Livewire\Component;

class CardListItem extends Component
{
    public Card $card;

    public function render()
    {
        return view('livewire.card-list-item');
    }
}
