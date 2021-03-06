@extends('backend.layouts.master')

@section('content')
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="">
      <div class="">
        </p>
        <button class="btn btn-danger">{{Auth::user()->name}}</button>
        <div class="table-responsive">
          <table class="table table-striped table-border table-hober" id="example" width="100%">
            <thead>
                <tr class="odd gradeX">
                    <th width="" scope="row">
                      Image
                    </th>
                    <th width="15%">
                      Title
                    </th>
                    <th width="35%">
                      Description
                    </th>
                    <th width="25%">
                      Action
                    </th>
                </tr>
            </thead>
            <tbody>
              @foreach ($story as $story)
                {{-- expr --}}
              
              <tr>
                  <td>
                    <img src=" {{ asset('images/storyimage/'.$story->imagefile) }} " alt="image" />
                  </td>
                 
                  <td>
                    <textarea cols="20" rows="3">{{$story->title}}</textarea>
                    
                  </td>
                  <td>
                    <textarea cols="20" rows="3">{{$story->description}}</textarea>
                     
                  </td>
                  <td>
                      <a class="btn btn-dark btn-sm" href="{{ route('admin.edit.course', $story->id) }}">
                            Edit<i class="mdi mdi-cloud-download"></i></a>
                        <a href="#deleteModal{{$story->id}}" data-toggle="modal" class="btn btn-danger btn-sm">
                          <i class="mdi mdi-alert-outline"></i>Delete</a>
                            <!-- delete Modal -->
                              <div class="modal fade" id="deleteModal{{$story->id}}"" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                  <div class="modal-body">
                                      <form action="{{ route('admin.course.delete', $story->id) }}" method="post">
                                        {{csrf_field()}}
                                                           {{$story->description}}  <br>               Are You sure To Delete
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