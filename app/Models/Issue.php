<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    protected $table = 'issues';
    protected $primaryKey = 'id';
    protected $fillable = [
        'item_id',
        'start_date',
        'solved',
        'finish_date',
        'comment'
    ];
    public function computers() {
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

    public function cables(){
        return $this->belongsTo(cables::class);
        }
}
