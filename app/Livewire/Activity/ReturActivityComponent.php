<?php

namespace App\Livewire\Activity;

use Livewire\Component;
use App\Models\Log_Activity;
use Livewire\WithPagination;

class ReturActivityComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $returs = Log_Activity::where('log_name', 'retur')->paginate(10);
        return view('livewire.activity.retur-activity-component', [
            'returs' => $returs
        ])->layout('layouts.layout-admin');
    }
}
