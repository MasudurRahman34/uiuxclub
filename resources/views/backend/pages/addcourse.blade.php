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
                  <form class="forms-sample" action="{{ route('admin.store.course') }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div class="form-group">
                      <label for="exampleInputName1">Course Name</label>
                      <input type="text" class="form-control" name="course_name" id="exampleInputName1" placeholder="Course Name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Course Title</label>
                      <input type="text" name="title" class="form-control" id="exampleInputEmail3" placeholder="Title">
                    </div>

                    
                    <div class="form-group">
                      <label for="exampleInputName1">Upload Image</label>
                      <div class="input-group mb-3">
                        <div class="custom-file">
                          <input type="file" name="imagefile" class="custom-file-input" id="inputGroupFile01">
                          <!-- <label class="custom-file-label" for="inputGroupFile01">Choose Image</label> -->
                        </div>
                      </div>


                    
                      <!-- <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </span>
                      </div> -->
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Course Description</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="2" name="description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Add Course</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>

          @endsection