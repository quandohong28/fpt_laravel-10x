<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class ListCategory extends Component
{
    public $categories;
    public $parentCategorySlug;

    public function mount($parent_id)
    {
        $this->parentCategorySlug = Category::where("id", $parent_id)->value('slug');
        $this->categories = Category::where('parent_id', $parent_id)->get();
    }

    public function render()
    {
        return view('livewire.list-category', [
            'categories' => $this->categories,
            'parentCategorySlug' => $this->parentCategorySlug,
        ]);
    }
}
