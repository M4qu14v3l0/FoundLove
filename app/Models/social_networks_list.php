<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class social_networks_list extends Model
{
    use HasFactory;

    protected $primaryKey= 'idSocial_networks_list';
    protected $table='social_networks_list';
    protected $fillable = [
        'social_network',
    ];
}
