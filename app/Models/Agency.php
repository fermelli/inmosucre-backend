<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $fillable = [
        'code',
        'address',
        'postal_code',
        'city',
        'fax',
        'phone',
        'action_zone',
    ];
}
