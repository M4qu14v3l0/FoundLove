<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as MongoModel;

class countries extends MongoModel
{
    use HasFactory;

    //protected $primaryKey= 'idCountries';
    protected $table='countries';
    protected $fillable = [
        'country',
    ];
<<<<<<< HEAD
}
=======
}
>>>>>>> 9ee65978fd616e3544f83fff25716d047ae9cbf2
