<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    use HasFactory;

    protected $primaryKey= 'idUsers';
    protected $table='photos';
    protected $fillable = [
        'idphotos',
        'photo',
    ];
}