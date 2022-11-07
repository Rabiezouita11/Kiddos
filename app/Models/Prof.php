<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Prof extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'email', 'password','image',
    ];
}