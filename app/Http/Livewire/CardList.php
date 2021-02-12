<?php

namespace App\Http\Livewire;

use App\Models\Brand;
use App\Models\Card;
use App\Models\Category;
use App\Models\Release;
use Livewire\Component;

class CardList extends Component
{
    public $query;
    public $filters;
    public $cards;

    public function mount()
    {
        $this->query = '';
        $this->filters = [
            'category' => '',
            'release_name' => '',
            'brand_name' => '',
            'year' => ''
        ];
        $this->cards = Card::all();
    }

    public function search()
    {
        $this->cards = Card::where('title', 'like', '%' . $this->query . '%')
            ->get();
    }

    public function onFilterChange()
    {
        $cards = Card::query();

        if (!empty($this->filters['category'])) {
            $cards = $cards->where('category', $this->filters['category']);
        }
        if (!empty($this->filters['release_name'])) {
            $cards = $cards->where('release_name', $this->filters['release_name']);
        }
        if (!empty($this->filters['brand_name'])) {
            $cards = $cards->where('brand_name', $this->filters['brand_name']);
        }
        if (!empty($this->filters['year'])) {
            $hasEndYear = count($years = explode('-', $this->filters['year'])) === 2;
            $startYear = $years[0];

            if ($hasEndYear) {
                $endYear = $years[1];
                $cards = $cards->whereBetween('year', [$startYear, $endYear]);
            } else {
                $cards = $cards->where('year', '>=', $startYear);
            }
        }

        $this->cards = $cards->get();
    }

    public function render()
    {
        return view('livewire.card-list', [
            'categories' => Category::orderBy('name')->get(),
            'brands' => Brand::orderBy('name')->get(),
            'releases' => Release::orderBy('name')->get(),
            'years' => [
                '2020',
                '2010-2019',
                '2000-2009',
                '1990-1999',
                '1980-1989',
                '1970-1979',
                '1960-1969',
                '1950-1959',
                '1940-1949',
                '1930-1939',
                '1920-1929',
                '1910-1919',
                '1900-1909',
                '1890-1899',
                '1880-1889',
            ]
        ]);
    }
}
