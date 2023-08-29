<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = ['category_id','nama','harga','image','qty'];

    protected $hidden = ['created_at','updated_at'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function product_masuk()
    {
        return $this->hasMany(Product_masuk::class, 'id');
    }

    public function product_keluar()
    {
        return $this->hasMany(Product_keluar::class, 'id');
    }
    
}
