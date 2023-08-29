<?php

namespace App\Livewire\Product;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class ProductEditComponent extends Component
{
    use WithFileUploads;

    public $nama;
    public $harga;
    public $qty;
    public $image;
    public $img;
    public $category_id;
    public $product_id;
    
    public function mount($product_id)
    {
        $product = Product::where('id', $product_id)->first();
        $this->nama = $product->nama;
        $this->harga = $product->harga;
        $this->qty = $product->qty;
        $this->image = $product->image;
        $this->category_id = $product->category->id;
        $this->product_id = $product->id;

    }

    public function editProduct()
    {
        $product = Product::find($this->product_id);
        $product->nama = $this->nama;
        $product->harga = $this->harga;
        $product->category_id = $this->category_id;
        $product->qty = $this->qty;
        if ($this->img) {
            $imagename = Carbon::now()->timestamp. '.' .$this->img->extension();
            $this->img->storeAs('product', $imagename);
            $product->image = $imagename;
        }
        $product->save();
        session()->flash('notif', 'Product Berhasil di Update');
        return redirect()->route('product.all');
    }

    public function render()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('livewire.product.product-edit-component', [
            'categories' => $categories,
            'products' => $products
        ])->layout('layouts.layout-admin');
    }
}
