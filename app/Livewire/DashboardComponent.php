<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Product;
use App\Models\Customers;
use App\Models\Suppliers;
use App\Models\Product_masuk;
use DB;

class DashboardComponent extends Component
{

    public function chartProductIn()
    {


    }

    public function render()
    {
        $user = User::count();
        $product = Product::count();
        $customer = Customers::count();
        $supplier = Suppliers::count();
        $products = Product::all();

        // $product_masuk = User::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
        // ->whereYear('created_at', date('Y'))
        // ->groupBy(DB::raw("Month(created_at)"))
        // ->pluck('count', 'month_name');

        // $labels = $product_masuk->keys();
        // $data = $product_masuk->values();

        return view('livewire.dashboard-component', [
            'user' => $user,
            'product' => $product,
            'customer' => $customer,
            'supplier' => $supplier,
            'products' => $products
        ])->layout('layouts.layout-admin');
    }
}
