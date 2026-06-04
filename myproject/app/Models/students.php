<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Students extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'students';

    protected $fillable = [
        'name',
        'email',
        'course',
        'password'
    ];
}