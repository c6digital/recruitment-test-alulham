<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mp extends Model
{
    protected $fillable = [
        'parliament_id',
        'name',
        'email',
        'party',
        'photo',
        'pcon_code',
        'pcon_name'
    ];
}
