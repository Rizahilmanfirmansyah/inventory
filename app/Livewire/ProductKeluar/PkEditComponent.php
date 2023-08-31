<?php

namespace App\Livewire\ProductKeluar;

use Livewire\Component;
use App\Models\Product_keluar;
use App\Models\Customers;
use App\Models\Product;

class PkEditComponent extends Component
{
    public $product_id;
    public $customer_id;
    public $qty;
    public $tanggal;
    public $pk_id;

    public function mount($pk_id)
    {
        $product_out = Product_keluar::where('id', $pk_id)->first();
        $this->qty = $product_out->qty;
        $this->tanggal = $product_out->tanggal;
        $this->product_id = $product_out->product->id;
        $this->customer_id = $product_out->customer->id;
        $this->pk_id = $product_out->id; 

    }

    public function editProductOut()
    {
        $product_out = Product_keluar::find($this->pk_id);
        $product_out->qty = $this->qty;
        $product_out->tanggal = $this->tanggal;
        $product_out->product_id = $this->product_id;
        $product_out->customer_id = $this->customer_id;
        $product_out->save();

        $product = Product::find($this->product_id);
        $product->qty -= $this->qty;
        $product->save();

        
        session()->flash('notif', 'berhasil Di Edit');
        return redirect()->route('product_keluar.all');
    }

    public function render()
    {
        $products = Product::all();
        $customers = Customers::all();
        return view('livewire.product-keluar.pk-edit-component', [
            'products' => $products,
            'customers' => $customers
        ])->layout('layouts.layout-admin');
    }
}
