<?php

namespace App\Livewire\ProductMasuk;

use Livewire\Component;
use App\Models\Product_masuk;
use App\Models\Suppliers;
use App\Models\Product;

class PmAddComponent extends Component
{
    public $product_id;
    public $supplier_id;
    public $qty;
    public $tanggal;

    public function addProductIn()
    {
        $this->validate([
            'product_id' => 'required',
            'supplier_id' => 'required',
            'qty' => 'required',
            'tanggal' => 'required'
        ]);

        $product_masuk = new Product_masuk();
        $product_masuk->qty = $this->qty;
        $product_masuk->product_id = $this->product_id;
        $product_masuk->supplier_id = $this->supplier_id;
        $product_masuk->tanggal = $this->tanggal;
        $product_masuk->save();

        $product = Product::find($this->product_id);
        $product->qty += $this->qty;
        $product->save();

        session()->flash('notif', 'Produk masuk Telah Ditambahkan');
        return redirect()->route('product_masuk.all');

    }
    public function render()
    {
        $products = Product::all();
        $suppliers = Suppliers::all();
        return view('livewire.product-masuk.pm-add-component', [
            'products' => $products,
            'suppliers' => $suppliers
        ])->layout('layouts.layout-admin');
    }
}
