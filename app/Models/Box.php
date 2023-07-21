<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;

    protected $table = 'boxes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'item_id',
        'condition'
    ];

    public function computers(){
        return $this->belongsTo(computers::class);
    }
    public function keyboards() {
        return $this->hasMany(keyboards::class);
    }
    public function joysticks() {
        return $this->hasMany(joysticks::class);
    }
    public function monitors() {
        return $this->hasMany(monitors::class);
    }

}
