<?php

namespace App\Livewire\Retur;

use Livewire\Component;
use App\Models\Retur;

class ReturAllComponent extends Component
{
    public function delete($id)
    {
        $retur = Retur::find($id);
        $retur->delete();
        session()->flash('notif', 'Delete Data Retur Berhasil');
    }
    public function render()
    {
        $returs = Retur::all();
        return view('livewire.retur.retur-all-component', [
            'returs' => $returs
        ])->layout('layouts.layout-admin');
    }
}
