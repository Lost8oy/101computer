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
}
