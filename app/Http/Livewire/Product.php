<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product as Products;

class Product extends Component
{
    public $product;
    public function render()
    {
        $this->products=Products::all();
        return view('products');
    }
}
