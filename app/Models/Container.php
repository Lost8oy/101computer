<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    use HasFactory;

    protected $table = 'containers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'shelf_id',
        'code',
        'description'
    ];

    public function shelves(){
        return $this->belongsTo(shelves::class);
    }

    public function computers(){
        return $this->hasMany(computers::class);
    }

    public function monitors(){
        return $this->hasMany(monitors::class);
    }

    public function keyboards(){
        return $this->hasMany(keyboards::class);
    }

    public function joysticks(){
        return $this->hasMany(joysticks::class);
    }

    public function cables(){
        return $this->hasMany(cables::class);
    }
}
