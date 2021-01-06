<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable= ['name', 'photo', 'description'];
}
