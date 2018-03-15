<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'cast', 'dir','release','language','tailer_link','poster','satus'
    ];
}
