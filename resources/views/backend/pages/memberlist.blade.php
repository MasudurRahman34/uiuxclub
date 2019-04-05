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
                      Image
                    </th>
                    <th width="">
                      Name
                    </th>
                    <th width="">
                      courses_title
                    </th>
                    <th width="">
                      comment
                    </th>
                    <th width="">
                      email
                    </th>
                   <!--  <th width="">
                     address
                   </th>
                   <th width="">
                     stasus
                   </th> -->
                    <th width="">
                      Action
                    </th>
                </tr>
            </thead>
            <tbody>
              @foreach ($members as $members)
                {{-- expr --}}
              
              <tr class="odd gradeX">
                  <td>
                    <img src=" {{ asset('images/membersimage/'.$members-> membersimage) }} " alt="image" />
                     </td>
                 
                  <td>
                     <textarea cols="15" rows="3">{{$members->members_name}} </textarea>
                      </td>
                  <td>
                     <textarea cols="15" rows="3">  {{$members->courses_title}}  </textarea>
                      </td>
                   
                  <td>
                    <textarea cols="15" rows="3">  {{$members->comment}} </textarea>
                     </td> 
                  <td>
                    <textarea cols="15" rows="3">   {{$members->email}} </textarea> 
                     </td> 
                  {{-- <td>
                     <textarea cols="15" rows="3"> {{$members->address}} </textarea>
                     </td>  --}}
                  <td> <a class="btn btn-dark btn-sm" href="">
                          Edit<i class="mdi mdi-cloud-download"></i></a></td>
                     
              </tr>
              @endforeach
            </tbody>
          </table>    
        </div>
      </div>
    </div>
  </div>
    <!--   <script src=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
        <script type="text/javascript">
      
    $(document).ready(function() {
        $('#example').DataTable();
    } );
        </script> -->
@endsection

