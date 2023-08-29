<?php

namespace App\Livewire\ProductMasuk;

use Livewire\Component;
use App\Models\Product_masuk;
use App\Models\Supliers;
use App\Models\Product;

class PmEditComponent extends Component
{
    public $product_id;
    public $suplier_id;
    public $qty;
    public $tanggal;
    public $pm_id;

    public function mount($pm_id)
    {
        $product_masuk = Product_masuk::where('id', $pm_id)->first();
        $this->qty = $product_masuk->qty;
        $this->tanggal = $product_masuk->tanggal;
        $this->pm_id = $product_masuk->id;

    }

    public function editInProduct()
    {
        $this->validate([
            'product_id' => 'required',
            'suplier_id' => 'required',
            'qty' => 'required',
            'tanggal' => 'required'
        ]);

        $product_masuk = Product_masuk::where($this->pm_id);
        $product_masuk->qty = $this->qty;
        $product_masuk->tanggal = $this->tanggal;
        $product->save();

        session()->flash('notif', 'Edit Produk Masuk Berhasil');
        return redirect()->route('product_masuk.all');
    }

    public function render()
    {
        return view('livewire.product-masuk.pm-edit-component');
    }
}
