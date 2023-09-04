<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\Auth;

class Category extends Model
{
    use LogsActivity;
    use HasFactory;

    protected $table = "categories";
    protected $fillable = [
        'name'
    ];

    // protected static $LogAttributes = ['name'];
    // protected static $logFillable = true;
    protected static $logOnlyDirty = true;

    public function getDescriptionForEvent(string $eventName): string {
        return $this->description . " {$eventName} Oleh " . Auth::user()->name;
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->useLogName('category');
        // ->withProperties(['name' => 'testuser']);
        
    }


    public function product()
    {
        return $this->hashMany(Product::class, 'id');
    }
}
