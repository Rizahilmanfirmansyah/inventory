<?php

namespace App\Livewire\ProductMasuk;

use Livewire\Component;
use App\Models\Product_masuk;
use App\Models\Suppliers;
use App\Models\Product;

class PmEditComponent extends Component
{
    public $product_id;
    public $supplier_id;
    public $qty;
    public $tanggal;
    public $pm_id;

    public function mount($pm_id)
    {
        $product_masuk = Product_masuk::where('id', $pm_id)->first();
        $this->qty = $product_masuk->qty;
        $this->tanggal = $product_masuk->tanggal;
        $this->product_id = $product_masuk->product->id;
        $this->supplier_id = $product_masuk->supplier->id;
        $this->pm_id = $product_masuk->id;

    }

    public function editProductIn()
    {
        $this->validate([
            'product_id' => 'required',
            'supplier_id' => 'required',
            'qty' => 'required',
            'tanggal' => 'required'
        ]);

        $product_masuk = Product_masuk::find($this->pm_id);
        $product_masuk->qty = $this->qty;
        $product_masuk->tanggal = $this->tanggal;
        $product_masuk->product_id = $this->product_id;
        $product_masuk->supplier_id = $this->supplier_id;
        $product_masuk->save();

        $product = Product::find($this->product_id);
        $product->qty += $this->qty;
        $product->save();

        session()->flash('notif', 'Edit Produk Masuk Berhasil');
        return redirect()->route('product_masuk.all');
    }

    public function render()
    {
        $products = Product::all();
        $suppliers = Suppliers::all();
        return view('livewire.product-masuk.pm-edit-component', [
            'products' => $products,
            'suppliers' => $suppliers,
        ])->layout('layouts.layout-admin');
    }
}
