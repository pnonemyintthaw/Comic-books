<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use App\Author;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = book::all();
        return view('backend.book.book_list',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();
        
        // return response()->file($pathToFile);
        // return response()->file($pathToFile, $headers);
        return view('backend.book.book_new',compact('authors','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        //  $request->validate([
        //     "name"=>"required",
        //     "photo"=>"required",
        //     "price"=>"required",
        //     "diccount"=>"sometime|srequired",
        //     "pdf"=>"required",
        //     "page"=>"required",
        //     "series"=>"required",
        //     "description"=>"required",
        //     "published"=>"required",
        //     "author"=>"required",
        //     "categoty"=>"required",


        // ]);

        //upload file-photo
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();
            $pdfName = time().'_'.$request->pdf->getClientOriginalName();

            // bookimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('bookimg', $fileName, 'public');
            $pdfPath = $request->file('pdf')->storeAs('bookpdf', $pdfName, 'public');

            $path = '/storage/'.$filePath;
            $pdf = '/storage/'.$pdfPath;
        }

        
        //store
        $book = new book;
        $book->name = $request->name;

        $book->photo= $path;
        $book->price = $request->price;
        $book->discount = $request->discount;
        $book->pdf= $pdf;
        $book->page=$request->page;
        $book->series=$request->series;

        $book->description = $request->description;
        $book->published = $request->published;
        $book->author_id = $request->author;
        $book->category_id = $request->category;


        $book->save();

        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('backend.book.book_show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('backend.book.book_edit',compact('book','authors','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {


        $request->validate([
            
            "photo"=>"sometimes|required",
            "pdf"=>"sometimes|required",


        ]);
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();
            $pdfName = time().'_'.$request->pdf->getClientOriginalName();

            // bookimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('bookimg', $fileName, 'public');
            $pdfPath = $request->file('pdf')->storeAs('bookpdf', $pdfName, 'public');

            $path = '/storage/'.$filePath;
            $pdf = '/storage/'.$pdfPath;
        }else{

            $path=$request->oldphoto;
            $pdf=$request->oldpdf;
        }

        
        //store
        
        $book->name = $request->name;

        $book->photo= $path;
        $book->price = $request->price;
        $book->discount = $request->discount;
        $book->pdf= $pdf;
        $book->page=$request->page;
        $book->series=$request->series;

        $book->description = $request->description;
        $book->published = $request->published;
        $book->author_id = $request->author;
        $book->category_id = $request->category;


        $book->save();

        return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
