<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;
    protected $table = 'manufacturers';
    protected $primaryKey= 'id';
    protected $fillable = [
        'name',
        'country_id',
        'name',
        'link',
        'description',
    ];

    public function countries() {
        return $this->belongsTo(countries::class);
    }

    public function computers() {
        return $this->hasMany(computers::class);
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
