<?php

namespace App\Livewire\Activity;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Log_Activity;
use App\Models\Product;

class ProductActivityComponent extends Component
{
    use WithPagination;


    public function render()
    {
        $products = Log_Activity::where('log_name', 'product')->paginate(10);
        return view('livewire.activity.product-activity-component', [
            'products' => $products
        ])->layout('layouts.layout-admin');
    }
}
