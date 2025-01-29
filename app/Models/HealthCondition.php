<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HealthCondition extends Model
{
    protected $fillable = [
        'pcon_code',
        'pcon_name',
        'group_code',
        'prevalence',
        'condition',
        'description'
    ];

    protected $casts = [
        'prevalence' => 'float',
    ];
}
