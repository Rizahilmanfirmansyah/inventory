<?php

namespace App\Livewire\Supplier;

use Livewire\Component;
use App\Models\Suppliers;

class SupplierAddComponent extends Component
{
    public $nama;
    public $alamat;
    public $email;
    public $telepon;

    public function addSuppliers()
    {
        $this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required'
        ]);

        $suppliers = new Suppliers();
        $suppliers->nama = $this->nama;
        $suppliers->alamat = $this->alamat;
        $suppliers->email = $this->email;
        $suppliers->telepon = $this->telepon;
        $suppliers->save();

        session()->flash('notif', 'Data Supliers Berhasil Ditambahkan');
        return redirec()->route('suppliers.all');
    }
    public function render()
    {
        return view('livewire.supplier.supplier-add-component');
    }
}
