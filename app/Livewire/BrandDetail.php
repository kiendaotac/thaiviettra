<?php

namespace App\Livewire;

use App\Models\Blog\Post;
use Livewire\Component;

class BrandDetail extends Component
{
    public $post;

    public function mount($slug)
    {
        $this->post = Post::whereSlug($slug)->first();
        if (!$this->post) {
            $this->redirectRoute('home-page');
        }
    }
    public function render()
    {
        return view('livewire.brand-detail');
    }
}
