<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class cities extends MongoModel
{
    use HasFactory;

    protected $table='cities';
    protected $fillable = [
        'cities_id',
        'city',
    ];
}
