<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    use HasFactory;
    protected $table = 'unities';
    protected $primaryKey= 'id';
    protected $fillable = [
        'zone_id',
        'code',
        'description',
    ];
    
    public function shelves() {
        return $this->hasMany(shelf::class);
    }

    public function zones(){
        return $this->belongsto(zones::class);
    }
}
