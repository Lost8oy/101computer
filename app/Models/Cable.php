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
}
