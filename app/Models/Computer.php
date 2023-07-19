<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;
    protected $table = 'computers';
    protected $primaryKey= 'id';
    protected $fillable = [
        'position_id',
        'manufacturer_id',
        'inventory_number',
        'serial_number',
        'model',
        'submodel',
        'processor',
        'power',
        'speed',
        'year',
        'bit',
        'description',
    ];

    public function manufacturer() {
        return $this->belongsTo('App\Models\Manufacturer', 'manufacturer_id', 'id');
    }
    public function item() {
        return $this->belongsTo('App\Models\Item');
    }
}
