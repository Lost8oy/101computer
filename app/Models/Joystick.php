<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joystick extends Model
{
    use HasFactory;

    protected $table = 'joysticks';
    protected $primaryKey= 'id';
    protected $fillable = [
        'position_id',
        'manufacturer_id',
        'inventory_number',
        'serial_number',
        'model',
        'year',
        'model',
        'description',
    ];
    
    public function manufacturer() {
        return $this->belongsto('App\Models\Manufacturer', 'manufacturer_id', 'id');
    }
    public function modelid() {
        return $this->hasMany('App\Models\Item', 'item_id', 'id');
    }
}
