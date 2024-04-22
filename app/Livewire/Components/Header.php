<?php

namespace App\Livewire\Components;

use App\Models\Blog\Post;
use App\Models\Discount;
use App\Models\Settings\Setting;
use App\Models\Shop\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Attributes\On;
use Livewire\Component;

class Header extends Component
{
    public $keyword, $brandPosts, $discounts, $categories;
    protected $queryString = [
        'keyword' => 'keyword'
    ];

    public $settings;
    public $cart;

    public function mount()
    {
        $this->settings = Setting::all();
        $this->brandPosts = Post::query()->whereHas('category', function ($query) {
            $query->where('slug', 'thuong-hieu');
        })->oldest()->get();
        $this->discounts = Discount::query()->whereStatus('active')->get();
        $this->cart = Cart::instance('default')->content()->toArray();
        $this->categories = Category::query()->where('is_visible', 1)->get();
    }

    public function render()
    {
        return view('livewire.components.header');
    }

    #[On('updateCart')]
    public function updateCart(): void
    {
        $this->cart = Cart::instance('default')->content()->toArray();
    }
}
