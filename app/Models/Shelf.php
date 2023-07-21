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

    public function containers(){
        return $this->hasMany(containers::class);
    }
}
