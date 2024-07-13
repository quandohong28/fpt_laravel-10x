<?php

namespace App\Livewire;

use Livewire\Component;

class ProductCard extends Component
{
    public $imageUrl;
    public $name;
    public $price;
    public $decredPrice;
    public function render()
    {
        return view('livewire.product-card', [
            'product' => [
                'imageUrl' => $this->imageUrl,
                'name' => $this->name,
                'price' => $this->price,
                'decredPrice' => $this->decredPrice
            ]
        ]);
    }
}
