<?php

namespace App\Http\Controllers\frontend;

use App\model\courseitem;
use App\model\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;



class CourseitemController extends Controller
{ /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $courseitem=courseitem::orderBy('id', 'desc')->get();
        return view('frontend.pages.index')->with('courseitem',$courseitem); 
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
     * @param  \App\model\courseitem  $courseitem
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
        {
    /*dd(Auth::user());*/
           $courseitem= courseitem::where('slug', $slug)->first();
           if(!is_null($courseitem)) {
                return view('frontend.pages.singlecourse', compact('courseitem'));

           }/*else{
            //return redirect()->route('products');
           }*/ 
        }

    /**
     * Show the course for the specified resource.
     *
     * @param  \App\model\courseitem  $courseitem
     * @return \Illuminate\Http\Response
     */
    public function edit(courseitem $courseitem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\courseitem  $courseitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, courseitem $courseitem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\courseitem  $courseitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(courseitem $courseitem)
    {
        //
    }
}
