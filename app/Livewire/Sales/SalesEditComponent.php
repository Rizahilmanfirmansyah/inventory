<?php

namespace App\Livewire\Sales;

use Livewire\Component;
use App\Models\Sales;

class SalesEditComponent extends Component
{
    public $nama;
    public $alamat;
    public $email;
    public $telepon;
    public $sales_id;

    public function mount($sales_id)
    {
        $sales = Sales::where('id', $sales_id)->first();
        $this->nama = $sales->nama;
        $this->alamat = $sales->alamat;
        $this->email = $sales->email;
        $this->telepon = $sales->telepon;
        $this->sales_id = $sales->id;
    }

    public function editSales()
    {
        $this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required'
        ]);

        $sales = Sales::find($this->sales_id);
        $sales->nama = $this->nama;
        $sales->alamat = $this->alamat;
        $sales->email = $this->email;
        $sales->telepon = $this->telepon;
        $sales->save();

        session()->flash('notif', 'Data Sales Berhasil Diupdate');
        return redirec()->route('sales.all');
    }
    
    public function render()
    {
        return view('livewire.sales.sales-edit-component');
    }
}
