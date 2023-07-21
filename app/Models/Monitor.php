<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    use HasFactory;
    protected $table = 'monitors';
    protected $primaryKey= 'id';
    protected $fillable = [
        'position_id',
        'manufacturer_id',
        'inventory_number',
        'serial_number',
        'model',
        'color',
        'size',
        'pixels',
        'description'
    ];

    public function shelves(){
        return $this->belongsTo(shelves::class);
    }

    public function containers(){
        return $this->belongTo(containers::class);
    }
   
    public function manufacturers(){
        return $this->belongsTo(manufacturers::class);
    }

    public function images(){
        return $this->hasMany(images::class);
    }

    public function issues(){
        return $this->hasMany(issues::class);
    }

    public function boxes(){
        return $this->hasOne(boxes::class);
    }
}
