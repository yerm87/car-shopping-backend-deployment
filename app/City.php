<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class City extends Eloquent
{
    protected $fillable = [
      'city', 'state'
    ];

    protected $collection = 'cities';
}
