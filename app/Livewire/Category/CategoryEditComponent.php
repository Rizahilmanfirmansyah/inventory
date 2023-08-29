<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class CategoryEditComponent extends Component
{
    public $name;
    public $category_id;

    public function mount($category_id)
    {
        $categories = Category::where('id', $category_id)->first();
        $this->name = $categories->name;
        $this->category_id = $categories->id;
    }

    public function editCategory()
    {
        $categories = Category::find($this->category_id);
        $categories->name = $this->name;
        $categories->save();
        session()->flash('notif', 'berhasil di update');
        return redirect()->route('category.all');

    }
    public function render()
    {
        return view('livewire.category.category-edit-component')->layout('layouts.layout-admin');
    }
}
