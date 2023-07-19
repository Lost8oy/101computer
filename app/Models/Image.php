<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $primaryKey= 'id';
    protected $fillable = [
        'item_id',
        'path',
        'description',
    ];
    
    public function item() {
        return $this->belongsTo('App\Models\Item', 'item_id', 'id');
    }
}
