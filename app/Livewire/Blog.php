<?php

namespace App\Livewire;

use App\Models\Blog\Post;
use App\Models\Shop\Product;
use Livewire\Component;

class Blog extends Component
{
    public $blogs, $products;

    public function mount()
    {
        $this->blogs = Post::query()->latest()->get();
        $this->products = Product::query()->inRandomOrder()->limit(7)->get();
    }
    public function render()
    {
        return view('livewire.blog');
    }
}
