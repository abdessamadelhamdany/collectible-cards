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
    <div class="row mb-3">
        <div class="col-12">
            <h3>Filters</h3>
        </div>
        <div class="col-md-3">
            <select wire:change="onFilterChange" wire:model="filters.category" class="custom-select text-capitalize">
                <option value="">Category</option>
                @foreach($categories as $category)
                <option value="{{ $category->name }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <select wire:change="onFilterChange" wire:model="filters.brand_name" class="custom-select text-capitalize">
                <option value="">Brand name</option>
                @foreach($brands as $brand)
                <option value="{{ $brand->name }}">{{ $brand->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <select wire:change="onFilterChange" wire:model="filters.release_name" class="custom-select text-capitalize">
                <option value="">Release name</option>
                @foreach($releases as $release)
                <option value="{{ $release->name }}">{{ $release->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <select wire:change="onFilterChange" wire:model="filters.year" class="custom-select text-capitalize">
                <option value="">Year</option>
                @foreach($years as $year)
                <option value="{{ $year }}">{{ $year }}{{ count(explode('-', $year))==1?' +':'' }}</option>
                @endforeach
            </select>
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
