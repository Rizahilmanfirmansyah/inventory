<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retur extends Model
{
    use HasFactory;
    protected $table = "returs";
    protected $fillable = [
        'product', 'customer', 'qty', 'ekspedisi', 'tanggal'
    ];

    // public function product()
    // {
    //     return $this->belongsTo(Product::class, 'product_id');
    // }

    // public function customer()
    // {
    //     return $this->belongsTo(Customers::class, 'customer_id');
    // }

    // public function ekspedisi()
    // {
    //     return $this->belongsTo(Ekspedisi::class, 'ekspedisi_id');
    // }
}
