<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UserAllComponent extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.user-all-component', [
            'users' => $users
        ])->layout('layouts.layout-log');
    }
}
