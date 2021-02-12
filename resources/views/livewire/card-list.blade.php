<div class="container">
    <div class="row">
        @foreach ($cards as $card)
        <div class="col-md-4">
            <livewire:card-list-item :card="$card" :key="$card->id" />
        </div>
        @endforeach
    </div>
</div>
