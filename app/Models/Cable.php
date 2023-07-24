<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cable extends Model
{
    use HasFactory;

    protected $table = 'cables';
    protected $primaryKey = 'id';
    protected $fillable = [
        'position_id',
        'type',
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
}
