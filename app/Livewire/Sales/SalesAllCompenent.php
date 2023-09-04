<?php

namespace App\Livewire\Sales;

use Livewire\Component;
use App\Models\Sales;

class SalesAllCompenent extends Component
{

    public function delete($id)
    {
        $sales = Sales::find($id);
        $sales->delete();

        session()->flash('notif', 'Sales Berhasil Dihapus');
    }
    
    public function render()
    {
        $sales = Sales::all();
        return view('livewire.sales.sales-all-compenent', [
            'sales' => $sales
        ])->layout('layouts.layout-admin');
    }
}
