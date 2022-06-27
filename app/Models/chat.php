<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    use HasFactory;

    protected $primaryKey= 'idChats';
    protected $table='chat';
    protected $fillable = [
        'other_user_id',
        'chat',
    ];
}