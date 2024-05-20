<?php

namespace App\Livewire;

use App\Models\Shop\Category;
use App\Models\Shop\Product;
use Livewire\Component;

class Products extends Component
{
    public $categories;
    public $products;
    public $category;
    public $search;

    protected $queryString = [
        'category' => ['except' => ''],
        'search'   => ['except' => ''],
    ];

    public function mount()
    {
    }
    public function render()
    {
        $this->getData();

        return view('livewire.products');
    }

    public function setCategory($slug): void
    {
        $this->category = $slug;
    }

    private function getData(): void
    {
        $this->categories = Category::query()->where('is_visible', true)->with('media')->limit(6)->latest()->get();
        $this->products = Product::query()
            ->with('media')
            ->when($this->category, function ($q) {
                $q->whereHas('categories', function ($q) {
                    return $q->where('slug', $this->category);
                });
            })
            ->when($this->search, function ($q) {
                return $q->where('name', 'like', '%' . $this->search . '%');
            })
            ->latest()->get();
    }
}
