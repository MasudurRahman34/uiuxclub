<?php

namespace App\Http\Controllers\frontend;

use App\model\story;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $story=story::orderBy('id', 'desc')->get();
        return view('frontend.pages.story')->with('story',$story); 
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(story $story)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit(story $story)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, story $story)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy(story $story)
    {
        //
    }
}
