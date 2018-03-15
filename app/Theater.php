<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theater extends Model
{
    protected $fillable = [
        'name',
        'location',
        'owner',
        'contact',
    ];
}
