<?php

namespace App\Livewire;

use App\Models\Shop\Product;
use Livewire\Component;

class Discount extends Component
{
    public $discount;

    public function mount($slug)
    {
        $this->discount = \App\Models\Discount::whereSlug($slug)->with(['product' => function ($query) {
            $query->with('media');
        }])->firstOrFail();
        $this->discount->relateProducts = Product::query()->whereIn('id', $this->discount->relate_products)->with('media')->get();
        $this->discount->saleProducts = Product::query()->whereIn('id', $this->discount->items)->with('media')->get();
    }
    public function render()
    {
        return view('livewire.discount');
    }
}
