<div class="container">
    <div class="row">
        <div class="col">
            <form wire:submit.prevent="submit">
                <div class="form-group row">
                    <label for="card-title" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
                    <div class="col-sm-6">
                        <input type="text" wire:model="title" class="form-control form-control-lg @error('title') is-invalid @enderror" id="card-title" placeholder="Title">
                        @error('title') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="card-brand-name" class="col-sm-2 col-form-label col-form-label-lg">Brand name</label>
                    <div class="col-sm-6">
                        <input type="text" wire:model="brand_name" class="form-control form-control-lg @error('brand_name') is-invalid @enderror" id="card-brand-name" placeholder="Brand name">
                        @error('brand_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="card-category" class="col-sm-2 col-form-label col-form-label-lg">Category</label>
                    <div class="col-sm-6">
                        <input type="text" wire:model="category" class="form-control form-control-lg @error('category') is-invalid @enderror" id="card-category" placeholder="Category">
                        @error('category') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="card-release_name" class="col-sm-2 col-form-label col-form-label-lg">Release name</label>
                    <div class="col-sm-6">
                        <input type="text" wire:model="release_name" class="form-control form-control-lg @error('release_name') is-invalid @enderror" id="card-release_name" placeholder="Release name">
                        @error('release_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="card-year" class="col-sm-2 col-form-label col-form-label-lg">Year</label>
                    <div class="col-sm-6">
                        <input type="text" wire:model="year" class="form-control form-control-lg @error('year') is-invalid @enderror" id="card-year" placeholder="Year">
                        @error('year') <span class="invalid-feedback">{{ $message }}</span> @enderror
                    </div>
                </div>

                <button class="btn btn-primary" type="submit">Add Card</button>
            </form>
        </div>
    </div>
</div>
