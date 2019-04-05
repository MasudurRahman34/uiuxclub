<?php
namespace App\Http\Controllers\backend;

use App\model\coursefile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\model\courseitem;
use Image;

class CoursefileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index()
    {
        //
    }

    public function courselist()
    {
        
       $courseitem=courseitem::orderBy('id', 'desc')->get();
        return view('backend.pages.courselist')->with('courseitem',$courseitem);
    }
   

    public function addcourse()
    {
        return view('backend.pages.addcourse');
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
    public function storecourse(Request $request)
    {
        $courseitem= new courseitem;
        $courseitem->course_name= $request->course_name;
        $courseitem->title= $request->title;
        $courseitem->slug= str_slug($courseitem->course_name);
        $courseitem->description= $request->description;

         if($request->hasFile('imagefile')){
               $image= $request->file('imagefile');
               $img=time().'.'.$image->getClientOriginalExtension();
                $location= public_path('images/courseimage/'.$img);
                Image::make($image)->save($location);

                $courseitem->imagefile=$img;
    }
     $courseitem->save();
     //Session()->flash('success', 'A new catagory has added succesfully');
     return redirect()->route('admin.course.list');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\coursefile  $coursefile
     * @return \Illuminate\Http\Response
     */
    public function show(coursefile $coursefile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\coursefile  $coursefile
     * @return \Illuminate\Http\Response
     */
    public function courseedit($id)
    {
        $courseitem=courseitem::find($id);
        return view('backend.pages.editcourse')->with('courseitem',$courseitem);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\coursefile  $coursefile
     * @return \Illuminate\Http\Response
     */
    public function courseupdate (Request $request, $id)
    {
        $courseitem=courseitem::find($id);
        $courseitem->course_name= $request->course_name;
        $courseitem->title= $request->title;
        $courseitem->slug= str_slug($courseitem->course_name);
        $courseitem->description= $request->description;

         if($request->hasFile('imagefile')){
               $image= $request->file('imagefile');
               $img=time().'.'.$image->getClientOriginalExtension();
                $location= public_path('images/courseimage/'.$img);
                Image::make($image)->save($location);

                $courseitem->imagefile=$img;
    }
     $courseitem->save();
     //Session()->flash('success', 'A new catagory has added succesfully');
     return redirect()->route('admin.course.list');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\coursefile  $coursefile
     * @return \Illuminate\Http\Response
     */
    public function coursedestroy($id)
    {
        $courseitem=courseitem::find($id);
        $courseitem->delete();
        return redirect()->route('admin.course.list');
    }
}
