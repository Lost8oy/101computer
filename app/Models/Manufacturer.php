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

    public function country() {
        return $this->belongsTo('App\Models\Country','country_id','id');
    }

    public function computer() {
        return $this->hasMany('App\Models\Computer');
    }
    public function keyboard() {
        return $this->hasMany('App\Models\Keyboard');
    }
    public function joystick() {
        return $this->hasMany('App\Models\Joystick');
    }
    public function monitor() {
        return $this->hasMany('App\Models\Monitor');
    }
}
