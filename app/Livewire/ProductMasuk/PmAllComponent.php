<?php

namespace App\Livewire\ProductMasuk;

use Livewire\Component;
use App\Models\Product_masuk;

class PmAllComponent extends Component
{
    public function render()
    {
        $product_masuk = Product_masuk::all();   
        return view('livewire.product-masuk.pm-all-component', [
            'product_masuk' => $product_masuk
        ])->layout('layouts.layout-admin');
    }
}
