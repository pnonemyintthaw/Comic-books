<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
use App\Story;
use App\Category;
class FrontendController extends Controller
{
     public function home($value='')
    {
    	$books =book::orderBy('updated_at','desc')->limit(4)->get();
        $stories=Story::orderBy('updated_at','desc')->limit(3)->get();
        $freebooks=book::where('price',0)->get();
    	
    	return view('frontend.index', compact('books', "stories", 'freebooks'));
    }

    public function comiclist($value='')
    {
    	$categories = Category::all();
        $books = book::all();
    	return view('frontend.comic_list', compact('categories', 'books'));
    }

    public function comicnew($value='')
    {
        $stories=Story::all();
        return view('frontend.comic_new', compact('stories'));
    }

    public function freebook($id)
    {
        $freebook = book::find($id);
        return view('frontend.freebook', compact('freebook'));
    }

       public function bookdetail($id)
    {
        $books = book::find($id);
        return view('frontend.bookdetail', compact('books'));
    }

    public function bookbycategory($id)
    {
        $categories=Category::find($id);
        $mycategories=Category::all();
        return view('frontend.bookbycategory', compact('categories' , 'mycategories'));

    }

    public function signin($value='')
    {
        return view('frontend.signin');

    }

    public function signup($value='')
    {
        return view('frontend.signup');
        
    }

    public function cart($value='')
    {
        return view('frontend.cart');
    }

}
