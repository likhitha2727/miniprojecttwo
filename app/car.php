<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $table = 'my_cars';

    protected $fillable = ['Make','Model','Year'];
}
