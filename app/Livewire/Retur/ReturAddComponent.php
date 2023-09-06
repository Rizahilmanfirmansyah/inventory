<?php

namespace App\Livewire\Retur;

use Livewire\Component;
use App\Models\Retur;
use App\Models\Product;
use App\Models\Customers;
use App\Models\Ekspedisi;

class ReturAddComponent extends Component
{
    public $product;
    public $customer;
    public $ekspedisi;
    public $qty;
    public $tanggal;

    public function addRetur()
    {
        $this->validate([
            'product' => 'required',
            'customer' => 'required',
            'ekspedisi' => 'required',
            'qty' => 'required',
            'tanggal' =>'required'
        ]);

        $retur = new Retur();
        $retur->product = $this->product;
        $retur->customer = $this->customer;
        $retur->qty = $this->qty;
        $retur->ekspedisi = $this->ekspedisi;
        $retur->tanggal = $this->tanggal;
        $retur->save();

        session()->flash('notif', 'Retur Produk Berhasil Di Tambahkan');
        return redirect()->route('retur.all');

    }

    public function render()
    {
        $products = Product::all();
        $customers = Customers::all();
        $ekspedisiInventory = Ekspedisi::all();
        return view('livewire.retur.retur-add-component', [
            'products' => $products,
            'customers' => $customers,
            'ekspedisiInventory' => $ekspedisiInventory
        ])->layout('layouts.layout-admin');
    }
}
