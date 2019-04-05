
@extends('backend.layouts.master')

@section('content')




            <div class="col-lg-12 grid-margin stretch-card">
              <div class="">
                <div class="">
                  
                  
                  </p>
                  <div class="table-responsive">
          <table class="table table-striped table-border table-hober" id="example" width="100%">
            <thead>
                <tr class="odd gradeX">
                    <th width="" scope="row"> course name</th>
                          <th width="15%">
                            Vedio Title
                          </th>
                          <th width="15%">
                            link Number
                          </th>
                          <th width="35%">
                           Duration
                          </th>
                          <th width="35%">
                           Status
                          </th>
                          <th width="25%">
                            Action
                          </th>
                        </tr>
                      
                      </thead>
                      <tbody>
                       @foreach ($coursefile as $file)
                        
                        <tr>
                          <td>
                            @foreach (App\model\courseitem::orderBy('id', 'desc')->where('id',$file->courseitem_id)->get() as $course)

                         {{$course->course_name}}
                          @endforeach
                        
                          </td>
                          <td>
                           {{$file->vedio_title}}
                            
                          </td>
                          <td>
                           
                              {{$file->vediofile}}
                          </td>
                          <td>
                            {{$file->vedio_duration}}
                             
                          </td>
                          <td>{{$file->stasus == 0 ? 'public' : 'private' }}
                          </td>
                          <td>
                            <a class="btn btn-dark btn-sm" href="{{ route('admin.edit.course.file', $file->id) }}">
                          Edit<i class="mdi mdi-cloud-download"></i></a>
                          <a href="#deleteModal{{$file->id}}" data-toggle="modal" class="btn btn-danger btn-sm">
                          <i class="mdi mdi-alert-outline"></i>Delete</a>
                          <!-- delete Modal -->
                              <div class="modal fade" id="deleteModal{{$file->id}}"" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ route('admin.course.file.delete', $file->id) }}" method="post">
                                      {{csrf_field()}}
                                                    <br>               Are You sure To Delete
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Permanent Delete</button>
                                    </form>

                                  </div>
                                </div>
                              </div>
                            </div>
                      <!-- end delete Modal -->

                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          @endsection