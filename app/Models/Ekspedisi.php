<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekspedisi extends Model
{
    use HasFactory;
    protected $table = "ekspedisi";
    protected $fillable = [
        'name'
    ];

    public function retur()
    {
        return $this->hasMany(Retur::class, 'id');
    }
}
