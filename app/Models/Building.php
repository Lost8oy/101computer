<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    use HasFactory;
    protected $table = 'buildings';
    protected $primaryKey= 'id';
    protected $fillable = [
        'country',
        'city',
        'address',
        'civic_n',
        'cap',
        'description',
    ];

    public function modelid() {
        return $this->hasMany('App\Models\Zone');
    }
}
