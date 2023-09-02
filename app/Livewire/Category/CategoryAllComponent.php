<?php

namespace App\Livewire\Category;

use Livewire\Component;
use App\Models\Category;

class CategoryAllComponent extends Component
{
    public $delete_id;

    public $listeners = ['deleteConfirmed'=>'deleteCategory'];

    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show', [
            'title' => 'tag-delete'
        ]);
    }

    public function deleteCategory()
    {
        $delete = Category::where('id', $this->delete_id)->first();
        $delete->delete();

        $this->dispatchBrowserEvent('categoryDelete');
    }

    // public function delete($id)
    // {
    //     $categories = Category::find($id);
    //     $categories->delete();
    //     session()->flash('notif', 'berhasil dihapus');
    // }
    
    public function render()
    {
        $categories = Category::all();
        return view('livewire.category.category-all-component', [
            'categories' => $categories
        ])->layout('layouts.layout-admin');
    }
}
