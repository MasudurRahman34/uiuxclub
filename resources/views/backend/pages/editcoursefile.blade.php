@extends('backend.layouts.master')

@section('content')
<div class="col-md-8 grid-margin stretch-card offset-md-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add  Course</h4>
                  <hr>
                 <!--  <p class="card-description">
                   Basic form elements
                 </p -->
                  <form class="forms-sample" action="{{ route('admin.course.file.update', $coursefile->id) }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}
                  <div class="form-group">
                    <label for="exampleInputName1">Select Course Name</label>
                      <select name="courseitem_id" class="form-control">
                       @foreach (App\model\courseitem::orderBy('id', 'desc')->get() as $courseitem)
                        <option value="{{$courseitem->id}}" {{$courseitem->id==$coursefile->id ? 'selected' : ''}}>{{$courseitem->course_name}}
                         </option>
                          {{-- expr --}}
                           @endforeach
                            </select>
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail3">Vedio Title</label>
                     <input type="text" name="vedio_title" class="form-control" id="exampleInputEmail3" value="{{$coursefile->vedio_title}}">
                  </div>
                
                  <div class="form-group">
                     <label for="exampleInputEmail3">Vedio link Number</label>
                     <input type="text" name="vediofile"  value="{{$coursefile->vediofile}}" class="form-control" id="exampleInputEmail3" placeholder="Title">
                  </div>
                   
                  <div class="form-group">
                     <label for="exampleInputEmail3">Vedio Duration</label>
                     <input type="text" name="vedio_duration" value="{{$coursefile->vedio_duration}}"  class="form-control" id="exampleInputEmail3" placeholder="Title">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputEmail3">Status</label>
                     <select name="stasus" class="form-control">
                     <option value="0" selected>public</option>
                     <option value="1">private</option>
                     </select>
                  </div>

                    
                    <button type="submit" class="btn btn-success mr-2">Update Course</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

          @endsection 