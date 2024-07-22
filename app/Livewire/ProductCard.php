<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductCard extends Component
{
    public $product;

    public function mount($id)
    {
        $this->product = Product::where("id", $id)->first();
    }
    public function render()
    {
        $product = $this->product;
        return view('livewire.product-card', compact('product'));
    }
}
