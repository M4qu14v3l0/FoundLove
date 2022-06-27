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
<<<<<<< HEAD
}
=======
}
>>>>>>> 9ee65978fd616e3544f83fff25716d047ae9cbf2
