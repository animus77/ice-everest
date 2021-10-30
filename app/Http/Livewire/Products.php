<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Products extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.products', [
            'products' => Product::all()
        ]);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required'
        ]);

        Product::create([
            'name' => $this->name
        ]);
    }

    public function destroy($id)
    {
        Product::destroy($id);
    }
}
