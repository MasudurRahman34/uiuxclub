  @extends('frontend.layouts.master')

@section('content')
<!--Header section end-->
        
<!--Contact us page section start-->
    <div class="contact_us_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-sm-12 col-lg-offset-2 col-md-offset-1">
                    <div class="contact_us_inner">
                        <div class="row dis_tbl">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 dis_tbl_cle full_width_599">
                                <div class="contact_title">
                                    <h1 class="lgt">We can Help you?</h1>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 dis_tbl_cle full_width_599">
                                <div class="contact_item">
                                    <ul class="list-unstyled">
                                        <li class="clr_red"><i class="icofont-envelope-open"></i> uxclubinfo@gmail.com</li>
                                        <li class="clr_red"><i class="icofont-phone-circle"></i> 01743 196 240</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact_form">
                        <form class="forms-sample" action="{{ route('user.contact.msg') }}" method="post" enctype="multipart/form-data">

                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width_599">
                                    <div class="form-group">
                                       {{Auth::user()->id}}
                                        <input type="text" class="form-control" id="UserName" name="user_name" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="Email1"  name="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="PhoneNumber" name="phone_number" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width_599">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="3" name="massage" placeholder="Write Message" required></textarea>
                                    </div>
                                    <button type="submit" class="border_grey bg_white btn_cus border_circle full_width_599">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--Contact us page section end-->
@endsection    
<!--UX club story page end-->
<!--Footer section start-->    