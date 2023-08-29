<?php

namespace App\Livewire\Sales;

use Livewire\Component;
use App\Mmodels\Sales;

class SalesAddComponent extends Component
{
    public $nama;
    public $alamat;
    public $email;
    public $telepon;

    public function addSales()
    {
        $this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required'
        ]);

        $sales = new Sales();
        $sales->nama = $this->nama;
        $sales->alamat = $this->alamat;
        $sales->email = $this->email;
        $sales->telepon = $this->telepon;
        $sales->save();

        session()->flash('notif', 'Data Sales Berhasil Ditambahkan');
        return redirec()->route('sales.all');
    }

    public function render()
    {
        return view('livewire.sales.sales-add-component')->layout('layouts.layout-admin');
    }
}
