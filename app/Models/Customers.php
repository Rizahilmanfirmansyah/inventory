<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Auth;

class Customers extends Model
{
    use LogsActivity;
    use HasFactory;

    protected $table = "customers";
    protected $fillable = [
        'nama', 'alamat', 'email', 'telepon'
    ];

    public function getDescriptionForEvent(string $eventName) : string {
        return $this->description . " {$eventName} Oleh " . Auth::user()->name;
    }

    public function getActivityLogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('customer');
    }


    public function product_keluar()
    {
        return $this->hashMany(Product_keluar::class, 'id');
    }
}
