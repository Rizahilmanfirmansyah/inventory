<?php

namespace App\Livewire\ProductMasuk;

use Livewire\Component;
use App\Models\Product_masuk;
use App\Models\Supliers;
use App\Models\Product;

class PmAddComponent extends Component
{
    public $product_id;
    public $suplier_id;
    public $qty;
    public $tanggal;

    public function addInProduct()
    {
        $this->validate([
            'product_id' => 'required',
            'suplier_id' => 'required',
            'qty' => 'required',
            'tanggal' => 'required'
        ]);

        $product_masuk = new Product();
        $product_masuk->qty = $this->qty;
        $product->product_id = $this->product_id;
        $product->supplier_id = $this->suppliar_id;
        $product_masuk->tanggal = $this->tanggal;
        $product->save();

        session()->flash('notif', 'Produk keluar Telah Ditambahkan');
        return redirect()->route('product_masuk.all');

    }
    public function render()
    {
        $products = Product::all();
        $suppliers = Supliers::all();
        return view('livewire.product-masuk.pm-add-component', [
            'products' => $product,
            'suppliers' => $suppliers
        ])->layout('layouts.layout-admin');
    }
}
