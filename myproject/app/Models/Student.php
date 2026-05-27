<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Student extends Model
{
    // this is the actual code 
    protected $connection = "mongodb";

    protected $fillable = [
        'name',
        'email',
        'course'
    ];
}