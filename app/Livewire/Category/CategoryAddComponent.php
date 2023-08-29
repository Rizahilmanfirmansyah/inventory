<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class CategoryAddComponent extends Component
{
    public $name;

    public function addCategory()
    {
        $categories = new Category();
        $categories->name = $this->name;
        $categories->save();

        session()->flash('notif', 'Berhasil Ditambahkan');
        return redirect()->route('category.all');
    }
    public function render()
    {
        return view('livewire.category.category-add-component')->layout('layouts.layout-admin');
    }
}
