<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories=Story::all();
        return view('backend.story.story_list',compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.story.story_new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();
            

            // bookimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('storyimg', $fileName, 'public');
            
            $path = '/storage/'.$filePath;
           
        }

        
        //store
        $story = new Story;
        $story->name = $request->name;

        $story->photo= $path;
        

        $story->description = $request->description;
        


        $story->save();

        return redirect()->route('story.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story)
    {
        return view('backend.story.story_show',compact('story'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit(Story $story)
    {
        return view('backend.story.story_edit',compact('story'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Story $story)
    {
         if($request->file()) {
            // 624872374523_a.jpg
            $fileName = time().'_'.$request->photo->getClientOriginalName();
            

            // bookimg/624872374523_a.jpg
            $filePath = $request->file('photo')->storeAs('storyimg', $fileName, 'public');
            
            $path = '/storage/'.$filePath;
           
        }else{

            $path=$request->oldphoto;
            $pdf=$request->oldpdf;
        }

        
        //store
        // $story = new Story;
        $story->name = $request->name;

        $story->photo= $path;
        

        $story->description = $request->description;
        


        $story->save();

        return redirect()->route('story.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy(Story $story)
    {
        //
    }
}
