<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $fillable = [
        'nama', 'alamat', 'email', 'telepon'
    ];

    public function product_keluar()
    {
        return $this->hashMany(Product_keluar::class, 'id');
    }
}
