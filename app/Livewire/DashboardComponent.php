<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Product;
use App\Models\Customers;
use App\Models\Suppliers;

class DashboardComponent extends Component
{
    public function render()
    {
        $user = User::count();
        $product = Product::count();
        $customer = Customers::count();
        $supplier = Suppliers::count();
        return view('livewire.dashboard-component', [
            'user' => $user,
            'product' => $product,
            'customer' => $customer,
            'supplier' => $supplier
        ])->layout('layouts.layout-admin');
    }
}
