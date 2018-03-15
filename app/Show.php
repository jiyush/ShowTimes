<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = [
        'movie',
        'showtime',
        'theater',
    ];
}
