<?php

namespace App\Livewire;

use App\Models\Blog\Post;
use App\Models\Shop\Category;
use App\Models\Shop\Product;
use Livewire\Component;

class HomePage extends Component
{
    public $categories;
    public $posts;
    public $products;
    public function mount()
    {
        $this->categories = Category::query()->with('media')->limit(6)->latest()->get();
        $this->posts = Post::query()->latest()->limit(6)->get();
        $this->products = Product::query()->with('media')->latest()->limit(6)->get();
    }
    public function render()
    {
        return view('livewire.home-page');
    }
}
