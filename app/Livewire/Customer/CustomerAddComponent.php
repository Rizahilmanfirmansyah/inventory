<?php

namespace App\Livewire\Customer;

use Livewire\Component;
use App\Models\Customers;

class CustomerAddComponent extends Component
{
    public $nama;
    public $alamat;
    public $email;
    public $telepon;

    public function addCustomer()
    {
        $this->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required'
        ]);


        $customer = new Customers();
        $customer->nama = $this->nama;
        $customer->alamat = $this->alamat;
        $customer->email = $this->email;
        $customer->telepon = $this->telepon;
        $customer->save();

        session()->flash('notif', 'Customer Berhasil Di Tambahkan');
        return redirect()->route('customer.all');
    }

    public function render()
    {
        $customers = Customer::all();
        return view('livewire.customer.customer-add-component');
    }
}
