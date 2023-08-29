<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class ProductAddComponent extends Component
{
    use WithFileUploads;

    public $nama;
    public $harga; 
    public $image;
    public $category_id;
    public $qty;

    public function addProduct()
    {
        $this->validate([
            'nama' => 'required',
            'harga' => 'required',
            'category_id' => 'required',
            'qty' => 'required'

        ]);

        $product = new Product();
        $product->nama = $this->nama;
        $product->harga = $this->harga;
        $product->qty = $this->qty;
        $product->category_id = $this->category_id;
        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('product', $imageName);
        $product->image = $imageName;
        $product->save();

        session()->flash('notif', 'Product Berhasil Ditabmhakan');
        return redirect()->route('product.all');

    }

    public function render()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('livewire.product.product-add-component', [
            'products' => $products,
            'categories' => $categories
        ])->layout('layouts.layout-admin');
    }
}
