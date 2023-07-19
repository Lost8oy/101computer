<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    use HasFactory;
    protected $table = 'shelves';
    protected $primaryKey= 'id';
    protected $fillable = [
        'unity_id',
        'code',
        'description',
    ];
    
    public function manufacturer() {
        return $this->belongsto('App\Models\Manufacturer', 'manufacturer_id', 'id');
    }
    public function modelid() {
        return $this->hasMany('App\Models\Item', 'item_id', 'id');
    }
}
