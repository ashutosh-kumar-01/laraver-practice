<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table="items";
    // table name is plural od Model Name 
    // it is better to write tablename in mode to avoid and confusion
    // by default laravel will look for the table name in plural from of model name
    // if we want to change the table name we can specify it in the model
}
