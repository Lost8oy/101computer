<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

     
    public function shelves(){
        return $this->belongsTo(shelves::class);
    }
    public function containers(){
        return $this->belongTo(containers::class);
    }
    public function boxes(){
        return $this->hasOne(boxes::class);
    }

    public function manufacturers(){
        return $this->belongsTo(manufacturers::class);
    }

    public function images(){
        return $this->hasMany(issues::class);
    }

}
