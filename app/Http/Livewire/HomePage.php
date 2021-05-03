<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page', [
            'products' => Product::all(),
        ]);
    }
}
