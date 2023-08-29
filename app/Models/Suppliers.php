<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;
    protected $table = "Suppliers";
    protected $fillable = [
        'nama', 'alamat', 'email', 'telepon'
    ];

    public function product_masuk()
    {
        return $this->hashMany(Product_masuk::class, 'supplier_id');
    }
}
