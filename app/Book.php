<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name', 'photo', 'price', 'discount', 'pdf', 'page', 'series', 'description', 'published', 'category_id', 'author_id'];

    public function Category()
    {
    	return $this->belongsTo('App\Category');
    }
    public function Author()
    {
    	return $this->belongsTo('App\Author');
    }
    public function orders()
    {
    	return $this->belongsToMany('App\Order','orderdetails')
    	->withPivot('quantity')
    	->withTimestamps();
    }
}
