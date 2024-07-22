<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ListProduct extends Component
{
    public $products;

    public function mount($id)
    {
        $this->products = Product::where('category_id', $id)->get();
}

    public function render()
    {
        return view('livewire.list-product', ['products' => $this->products]);
    }
}
