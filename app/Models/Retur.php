<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Auth;

class Retur extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $table = "returs";
    protected $fillable = [
        'product', 'customer', 'qty', 'ekspedisi', 'tanggal'
    ];

    public function getDescriptionForEvent(string $eventName) : string{
        return $this->description . "{$eventName} Oleh " . Auth::user()->name;
    }

    public function getActivityLogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('retur');

    }

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
