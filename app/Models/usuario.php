<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $fillable = [
        'name',
        'email'
    ];
}
