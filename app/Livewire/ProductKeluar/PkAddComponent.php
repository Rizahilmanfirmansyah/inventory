<?php

namespace App\Livewire\ProductKeluar;

use Livewire\Component;
use App\Models\Product_keluar;

class PkAddComponent extends Component
{
    public $product_id;
    public $customer_id;
    public $qty;
    public $tanggal;

    public function addProductOut()
    {
        $this->validate([
            'product_id' => 'required',
            'customer_id' => 'required',
            'qty' => 'required',
            'tanggal' =>'required'
        ]);

        $product_out = new Product_keluar();
        $product_out->qty = $this->qty;
        $product_out->tanggal = $this->tanggal;
        $product_out->product_id = $this->product_id;
        $product_out->customer_id = $this->customer_id;
        $product_out->save();

        session()->flash('notif', 'Berhasil Di Input');
        return redirect()->route('product_keluar.all');
    }

    public function render()
    {
        return view('livewire.product-keluar.pk-add-component')->layout('layouts.layout.admin');
    }
}
