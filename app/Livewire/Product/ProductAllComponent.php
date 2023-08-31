<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class ProductAllComponent extends Component
{
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        session()->flash('notif', 'Product Berhasil Didelete');
    }
    
    public function render()
    {
        $products = Product::all();
        return view('livewire.product.product-all-component', [
            'products'=> $products
        ])->layout('layouts.layout-admin');
    }
}
