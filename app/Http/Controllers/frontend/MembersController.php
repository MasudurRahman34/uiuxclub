<?php

namespace App\Http\Controllers\frontend;

use App\model\members;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members=members::orderBy('id', 'desc')->get();
        return view('frontend.pages.members')->with('members',$members); 
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
     * @param  \App\model\members  $members
     * @return \Illuminate\Http\Response
     */
    public function show(members $members)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\members  $members
     * @return \Illuminate\Http\Response
     */
    public function edit(members $members)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\members  $members
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, members $members)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\members  $members
     * @return \Illuminate\Http\Response
     */
    public function destroy(members $members)
    {
        //
    }
}
