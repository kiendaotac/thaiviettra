<?php

namespace App\Livewire;

use App\Models\Blog\Post;
use Livewire\Component;

class Brand extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = Post::query()->whereHas('category', function ($query) {
            $query->where('slug', 'thuong-hieu');
        })->oldest()->get();
    }
    public function render()
    {
        return view('livewire.brand');
    }
}
