<?php

namespace App\Livewire\Customer;

use Livewire\Component;
use App\Models\Customers;

class CustomerAllComponent extends Component
{
    public function render()
    {
        $customers = Customers::all();
        return view('livewire.customer.customer-all-component', [
            'customers' => $customers 
        ])->layout('layouts.layout-admin');
    }
}
