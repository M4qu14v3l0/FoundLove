<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class social_network extends Model
{
    use HasFactory;

    protected $primaryKey= 'idSocial_networks';
    protected $foreignkey='idSocial_networks_list';
    protected $table='social_networks';
    protected $fillable = [
        'link',
        'idSocial_networks_list',
    ];
}