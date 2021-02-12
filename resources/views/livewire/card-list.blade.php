<div class="container">
    <div class="row mb-3">
        <div class="col">
            <form wire:submit.prevent="search" class="row align-items-center no-gutters">
                <div class="col mr-3">
                    <input type="text" class="form-control" wire:model="query" placeholder="Write a card title">
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary px-5" type="submit" wire:click="search">Search</button>
                </div>
            </form>
        </div>
        <div class="col-auto">
            <a href="{{ route('cards.create') }}" class="btn btn-primary">Add Card</a>
        </div>
    </div>
    <div class="row">
        @foreach ($cards as $card)
        <div class="col-md-4 mb-3">
            <livewire:card-list-item :card="$card" :key="$card->id" />
        </div>
        @endforeach
    </div>
</div>
