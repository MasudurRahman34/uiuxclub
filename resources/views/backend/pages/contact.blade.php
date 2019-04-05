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
                    <th width="" scope="row">
                      Email
                    </th>
                    <th width="">
                      Phone Number
                    </th>
                    <th width="">
                      Massage
                    </th>
                    <th width="">
                      Reply
                    </th>
                    <th width="">
                      Action
                    </th>
                </tr>
            </thead>
            <tbody>
              @foreach ($contact as $contact)
                {{-- expr --}}
              
              <tr>
                  
                  <!-- <td>
                     <textarea cols="15" rows="3">{{$contact->user_name}} </textarea>
                      </td> -->
                  <td>
                     {{$contact->email}}
                     </td> 
                  <td>
                      {{$contact->phone_number}}
                     </td> 
                  <td>
                    <textarea cols="15" rows="3">  {{$contact->massage}} </textarea>
                     </td>
                     <td>
                    <textarea cols="15" rows="3">  {{$contact->reply =='Thank you' ? 'Thank you' : $contact->reply }} </textarea>
                     </td>
                  <td>
                      
                          <a href="#repalyModel{{$contact->id}}" data-toggle="modal" class="btn btn-danger btn-sm">
                          <i class="mdi mdi-alert-outline"></i>Reply</a>
                          <!-- delete Modal -->
                              <div class="modal fade" id="repalyModel{{$contact->id}}"" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> {{$contact->email}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ route('admin.contact.reply', $contact->id) }}" method="post">
                                      {{csrf_field()}}
                                                    <br>               <textarea name="reply" rows="5" cols="60"></textarea>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Reply</button>
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