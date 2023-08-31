<?php

namespace App\Livewire\Supplier;

use Livewire\Component;
use App\Models\Suppliers;

class SupplierAllComponent extends Component
{
    public function delete($id)
    {
        $suppliers = Suppliers::find($id);
        $suppliers->delete();
        session()->flash('notif', 'delete berhasil');
    }
    
    public function render()
    {
        $suppliers = Suppliers::all();
        return view('livewire.supplier.supplier-all-component', [
            'suppliers' => $suppliers
        ])->layout('layouts.layout-admin');
    }
}
