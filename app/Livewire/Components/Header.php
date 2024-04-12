<?php

namespace App\Livewire\Components;

use App\Models\Blog\Post;
use App\Models\Discount;
use App\Models\Settings\Setting;
use Livewire\Component;

class Header extends Component
{
    public $keyword, $brandPosts, $discounts;
    protected $queryString = [
        'keyword' => 'keyword'
    ];

    public $settings;

    public function mount()
    {
        $this->settings = Setting::all();
        $this->brandPosts = Post::query()->whereHas('category', function ($query) {
            $query->where('slug', 'thuong-hieu');
        })->oldest()->get();
        $this->discounts = Discount::query()->whereStatus('active')->get();
    }

    public function render()
    {
        return view('livewire.components.header');
    }
}
