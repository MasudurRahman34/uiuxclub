<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\story;
use Image;

class storyfileContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
       public function addstory()
    {
        return view('backend.pages.addstory');
    }

    
    public function storylist()
    {
         $story=story::orderBy('id', 'desc')->get();
        return view('backend.pages.storylist')->with('story',$story); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $story= new story;
        
        $story->title= $request->title;
        $story->slug= str_slug($story->title);
        $story->description= $request->description;

         if($request->hasFile('imagefile')){
               $image= $request->file('imagefile');
               $img=time().'.'.$image->getClientOriginalExtension();
                $location= public_path('images/storyimage/'.$img);
                Image::make($image)->save($location);

                $story->imagefile=$img;
    }
     $story->save();
     //Session()->flash('success', 'A new catagory has added succesfully');
     return redirect()->route('admin.story.file.list');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
