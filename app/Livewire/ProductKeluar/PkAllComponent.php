<?php

namespace App\Livewire\ProductKeluar;

use Livewire\Component;
use App\Models\Product_keluar;
 
class PkAllComponent extends Component
{
   
    public function render()
    {
        $products_keluar = Product_keluar::all();
        return view('livewire.product-keluar.pk-all-component', [
            'products_keluar' => $products_keluar
        ])->layout('layouts.layout-admin');
    }
}
