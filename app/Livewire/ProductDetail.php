<?php

namespace App\Livewire;

use App\Models\Shop\Product;
use Livewire\Component;

class ProductDetail extends Component
{
    public $product, $products;
    public function mount($slug)
    {
        $this->product = Product::query()->where('slug', $slug)->with('media')->firstOrFail();
        $this->products = Product::query()->inRandomOrder()->take(10)->get();
    }
    public function render()
    {
        return view('livewire.product-detail');
    }
}
