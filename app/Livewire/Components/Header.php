<?php

namespace App\Livewire\Components;

use App\Models\Settings\Menu;
use App\Models\Settings\Setting;
use Livewire\Component;

class Header extends Component
{
    public $keyword, $menus;
    protected $queryString = [
        'keyword' => 'keyword'
    ];

    public $settings;

    public function mount()
    {
        $this->settings = Setting::all();
        $this->menus = Menu::where('name', 'main-menu')->first()->content;
    }

    public function render()
    {
        return view('livewire.components.header');
    }
}
