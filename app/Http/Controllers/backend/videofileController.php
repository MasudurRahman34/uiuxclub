<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\courseitem;
use App\model\coursefile;
use Image;
 

class videofileController extends Controller
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

    public function index()
    {
        //
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


    public function coursefilelist()
    {
       $coursefile=coursefile::orderBy('id', 'desc')->get();
        return view('backend.pages.coursefilelist')->with('coursefile',$coursefile);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storecoursefile(Request $request)
    {
        $coursefile = new coursefile;
        $coursefile->courseitem_id= $request->courseitem_id;
        $coursefile->vedio_title= $request->vedio_title;
        $coursefile->vediofile= $request->vediofile;
        $coursefile->vedio_duration= $request->vedio_duration;
        $coursefile->stasus= $request->stasus;

         
     $coursefile->save();
     //Session()->flash('success', 'A new catagory has added succesfully');
     return redirect()->route('admin.course.file.list');
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
   public function coursefileedit($id)
    {
        $coursefile=coursefile::find($id);
        return view('backend.pages.editcoursefile')->with('coursefile',$coursefile);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
      public function addcoursefile()
    {
        return view('backend.pages.addcoursefile');
    }
    
    public function coursefileupdate(Request $request, $id)
    {
        $coursefile=coursefile::find($id);
        $coursefile->courseitem_id= $request->courseitem_id; 
        $coursefile->vedio_title= $request->vedio_title;
        $coursefile->vediofile= $request->vediofile;
        $coursefile->vedio_duration= $request->vedio_duration;
        $coursefile->stasus= $request->stasus;

     $coursefile->save();
     //Session()->flash('success', 'A new catagory has added succesfully');
     return redirect()->route('admin.course.file.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function coursefiledestroy($id)
    {
        $coursefile=coursefile::find($id);
        $coursefile->delete();
        return redirect()->route('admin.course.file.list');
    }
}
