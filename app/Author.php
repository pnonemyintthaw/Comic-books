<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name'];

    public function Book()
    {
    	return $this->hasMany('App\Book');
    }
}
