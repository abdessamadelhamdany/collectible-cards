<div class="container">
    <div class="row mb-3">
        <div class="col">
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
