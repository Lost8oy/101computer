<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;
    protected $table = 'zones';
    protected $primaryKey= 'id';
    protected $fillable = [
        'building_id',
        'denomination',
        'flooor',
        'description',
    ];

    public function unities() {
        return $this->hasMany(unity::class);
    }

    public function buildings() {
        return $this->belongsTo(building::class);
    }
}
