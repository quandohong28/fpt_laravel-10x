<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class Navbar extends Component
{

    public function render()
    {
        $categories = Category::where("parent_id", null)->get();
        return view('livewire.navbar', compact('categories'));
    }
}
