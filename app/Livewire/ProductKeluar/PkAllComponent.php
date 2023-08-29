<?php

namespace App\Livewire\ProductKeluar;

use Livewire\Component;
use App\Models\Product_keluar;
 
class PkAllComponent extends Component
{
   
    public function render()
    {
        $product_outs = Product_keluar::all();
        return view('livewire.product-keluar.pk-all-component', [
            'product_outs' => $product_outs
        ])->layout('layouts.layout.admin');
    }
}
