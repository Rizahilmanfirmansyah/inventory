<?php

namespace App\Livewire\Supplier;

use Livewire\Component;

class SupplierEditComponent extends Component
{
    public $nama;
    public $alamat;
    public $email;
    public $telepon;
    public $suppliers_id;

    public function mount($suppliers_id)
    {
        $suppliers = Suppliers::where('id', $suppliers_id)->first();
        $this->nama = $suppliers->nama;
        $this->alamat = $suppliers->alamat;
        $this->email = $suppliers->email;
        $this->telepon = $suppliers->telepon;
        $this->suppliers_id = $suppliers->id;
    }

    public function editSuppliers()
    {
        $this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required'
        ]);

        $suppliers = Suppliers::find($this->suppliers_id);
        $suppliers->nama = $this->nama;
        $suppliers->alamat = $this->alamat;
        $suppliers->email = $this->email;
        $suppliers->telepon = $this->telepon;
        $suppliers->save();

        session()->flash('notif', 'Data Supplier Berhasil Diupdate');
        return redirec()->route('suppliers.all');
    }
    public function render()
    {
        return view('livewire.supplier.supplier-edit-component');
    }
}
