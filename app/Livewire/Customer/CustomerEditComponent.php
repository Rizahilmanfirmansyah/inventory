<?php

namespace App\Livewire\Customer;

use Livewire\Component;
use App\Models\Customers;

class CustomerEditComponent extends Component
{
    public $nama;
    public $alamat;
    public $email;
    public $telepon;
    public $customer_id;

    public function mount($customer_id)
    {
        $customer = Customers::where('id', $customer_id)->first();
        $this->nama = $customer->nama;
        $this->alamat = $customer->alamat;
        $this->email = $customer->email;
        $this->telepon = $customer->telepon;
        $this->customer_id = $customer->id;
    }

    public function editCustomer()
    {
        $customer = Customers::find($this->customer_id);
        $customer->nama = $this->nama;
        $customer->alamat = $this->alamat;
        $customer->email = $this->email;
        $customer->telepon = $this->telepon;
        $customer->save();

        session()->flash('notif', 'Customer Berhasil Diedit');
        return redirect()->route('customer.all');

    }


    public function render()
    {
        return view('livewire.customer.customer-edit-component')->layout('layouts.layout-admin');
    }
}
