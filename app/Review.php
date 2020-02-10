<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Review extends Eloquent
{
    protected $fillable = [
    	'title', 'content', 'image'
    ];

    protected $collection = 'reviews';
}
