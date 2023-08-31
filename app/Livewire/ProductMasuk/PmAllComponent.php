<?php

namespace App\Livewire\ProductMasuk;

use Livewire\Component;
use App\Models\Product_masuk;

class PmAllComponent extends Component
{
    public function render()
    {
        $products_masuk = Product_masuk::all();   
        return view('livewire.product-masuk.pm-all-component', [
            'products_masuk' => $products_masuk
        ])->layout('layouts.layout-admin');
    }
}
