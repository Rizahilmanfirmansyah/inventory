<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserAddComponent extends Component
{
    public $name;
    public $email;
    public $password;
    public $role;

    public function addUser()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $users = new User();
        $users->name = $this->name;
        $users->email = $this->email;
        $users->password = $this->Hash::make(['password']);
        $users->role = $this->role;
        $users->save();

        return redirect()->route('category.all');
    }

    public function render()
    {
        return view('livewire.user-add-component');
    }
}
