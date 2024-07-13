<?php

namespace App\Livewire\Partials;

use Livewire\Component;

class Header extends Component
{
    public $navItems = [
        "home" => [
            "title" => "Home",
            "url" => "page.home",
        ],
    ];

    public $darkMode;

    public function toggleDarkMode()
    {
        $this->darkMode = !$this->darkMode;
    }

    public function mount()
    {
        $this->darkMode = false;
    }

    public function render()
    {
        return view('livewire.partials.header', [
            'navItems' => $this->navItems,
            'darkMode' => $this->darkMode,
        ]);
    }
}
