<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class ListCategory extends Component
{
    public $categories;

    public function mount($parent_id) {
        $this->categories = Category::where('parent_id', $parent_id)->get();
    }

    public function render()
    {
        $categories = $this->categories;
        return view('livewire.list-category', compact('categories'));
    }
}
