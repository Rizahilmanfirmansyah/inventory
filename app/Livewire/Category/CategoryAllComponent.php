<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class CategoryAllComponent extends Component
{
    public function delete($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        session()->flash('notif', 'berhasil dihapus');
    }
    
    public function render()
    {
        $categories = Category::all();
        return view('livewire.category.category-all-component', [
            'categories' => $categories
        ])->layout('layouts.layout-admin');
    }
}
