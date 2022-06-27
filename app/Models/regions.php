<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class regions extends MongoModel
{
    use HasFactory;

    protected $table='regions';
    protected $fillable = [
        'country_id',
        'region',
    ];
}