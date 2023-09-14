<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;

class ProductDetailComponent extends Component
{
    public $product_id;

    public function mount($product_id)
    {
        $this->product_id = $product_id;
    }

    public function render()
    {
        $detail = Product::where('id', $this->product_id)->first();
        return view('livewire.product.product-detail-component', [
            'detail' => $detail
        ])->layout('layouts.layout-admin');
    }
}
