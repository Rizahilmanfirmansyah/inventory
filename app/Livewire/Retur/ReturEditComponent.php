<?php

namespace App\Livewire\Retur;

use Livewire\Component;
use App\Models\Retur;

class ReturEditComponent extends Component
{
    public $product;
    public $customer;
    public $qty;
    public $ekspedisi;
    public $tanggal;
    public $retur_id;

    public function mount($retur_id)
    {
        $retur = Retur::where('id', $retur_id)->first();
        $this->product = $retur->product;
        $this->customer = $retur->customer;
        $this->qty = $retur->qty;
        $this->ekspedisi = $retur->ekspedisi;
        $this->tanggal = $retur->tanggal;
        $this->retur_id = $retur->id;
    }

    public function editRetur()
    {
        $retur = Retur::find($this->retur_id);
        $retur->product = $this->product;
        $retur->customer = $this->customer;
        $retur->qty = $this->qty;
        $retur->ekspedisi = $this->ekspedisi;
        $retur->tanggal = $this->tanggal;
        $retur->save();

        session()->flash('notif', 'Retur Produk Berhasil Di Update');
        return redirect()->route('retur.all');
    }
    
    public function render()
    {
        return view('livewire.retur.retur-edit-component')->layout('layouts.layout-admin');
    }
}
