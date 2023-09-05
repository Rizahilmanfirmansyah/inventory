<?php

namespace App\Livewire\Activity;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Log_Activity;

class ProductKeluarActivityComponent extends Component
{
    use WithPagination;
    
    public function render()
    {
        $products_keluar = Log_Activity::where('log_name', 'product_keluar')->paginate(10);
        return view('livewire.activity.product-keluar-activity-component', [
            'products_keluar' => $products_keluar
        ])->layout('layouts.layout-log');
    }
}
