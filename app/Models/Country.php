<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    protected $primaryKey= 'id';
    protected $fillable = [
        'name',
        'description',
    ];

    public function manufacturers() {
        return $this->hasMany(manufacturers::class);
    }
}
