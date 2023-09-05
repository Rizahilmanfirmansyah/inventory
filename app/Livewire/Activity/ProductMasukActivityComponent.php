<?php

namespace App\Livewire\Activity;

use Livewire\Component;
use App\Models\Log_Activity;
use Livewire\WithPagination;

class ProductMasukActivityComponent extends Component
{
    use WithPagination;
    
    public function render()
    {
        $products_masuk = Log_Activity::where('log_name', 'product_masuk')->paginate(10); 
        return view('livewire.activity.product-masuk-activity-component', [
            'products_masuk' => $products_masuk
        ])->layout('layouts.layout-log');
    }
}
