<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Header extends Component
{
    public $keyword;
    protected $queryString = [
        'keyword' => 'keyword'
    ];

    public function render()
    {
        return view('livewire.components.header');
    }
}
