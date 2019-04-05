@extends('frontend.layouts.master')

@section('content')



        <div class="header_banner">
            <div class="container">
                <h1 class="text-center lgt ">Become a <span class="clr_red typewrite" data-period="500" data-type='[ "UX UI Designer", "Mobile App Designer", "Creative Designer" ]'></span></h1>
                <span class="wrap"></span>
            </div>
        </div>
        <!--Header banner section end-->
        <!--Our course section start-->
        <div class="our_courses bg_grey">
            <div class="container">
                <div class="row dis_table">
                    @foreach ($courseitem as $courseitem)
                    <div class="dis_cell col-lg-3 col-md-3 col-sm-6 col-xs-6 full_width_599">
                        <div class="our_course_item border_rad_5">
                                <a href="{!! route('singlecourse.show', $courseitem->slug) !!}">
                                <img src="{{ asset('images/courseimage/'.$courseitem->imagefile) }}" alt="course">
                            </a>
                            <div class="caption">
                                <h3 class="bold font_s_20">{{$courseitem->title}}</h3>
                                <p>{{$courseitem->description}}</p>
                                <a href="{{ route('singlecourse.show', $courseitem->slug) }}"><i class="icofont-rounded-right"></i> 20 Class & Resource</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="dis_cell col-lg-3 col-md-3 col-sm-6 col-xs-6 full_width_599">
                        <div class="our_course_item border_rad_5">
                            <a href="mobile_app_design.html">
                                <img src="images/mobile_app.jpg" alt="course">
                            </a>
                            <div class="caption">
                                <h3 class="bold font_s_20">Become a Mobile App Designer</h3>
                                <p>Mobile App Design Course with Live Support</p>
                                <a href="mobile_app_design.html"><i class="icofont-rounded-right"></i> 20 Class & Resource</a>
                            </div>
                        </div>
                    </div>
                    <div class="dis_cell col-lg-3 col-md-3 col-sm-6 col-xs-6 full_width_599">
                        <div class="our_course_item border_rad_5">
                            <a href="experience design.html">
                                <img src="images/adobe_xd.jpg" alt="course">
                            </a>
                            <div class="caption">
                                <h3 class="bold font_s_20">Learn Adobe XD Easily*</h3>
                                <p>Adobe Experience Design (XD)for Good Skill on UX UI Design with  Live Support, </p>
                                <a href="experience design.html"><i class="icofont-rounded-right"></i> 20 Class & Resource</a>
                            </div>
                        </div>
                    </div>
                    <div class="dis_cell col-lg-3 col-md-3 col-sm-6 col-xs-6 full_width_599">
                        <div class="our_course_item border_rad_5">
                            <a href="graphic_design.html">
                                <img src="images/graphic_designer.jpg" alt="course">
                            </a>
                            <div class="caption">
                                <h3 class="bold font_s_20">Graphic Design Course for Begenner</h3>
                                <p>Graphic & Creative Design Master Course with  Live Support</p>
                                <a href="graphic_design.html"><i class="icofont-rounded-right"></i> 20 Class & Resource</a>
                            </div>
                        </div>
                    </div>
                    <div class="dis_cell col-lg-3 col-md-3 col-sm-6 col-xs-6 full_width_599">
                        <div class="our_course_item border_rad_5">
                            <a href="useability.html">
                                <img src="images/user_reserce.jpg" alt="course">
                            </a>
                            <div class="caption">
                                <h3 class="bold font_s_20">User Research & Usability*</h3>
                                <p>User Experience Guide for<br>UX UI Designer<br> with  Live Support</p>
                                <a href="useability.html"><i class="icofont-rounded-right"></i> 20 Class & Resource</a>
                            </div>
                        </div>
                    </div>
                    <div class="dis_cell col-lg-3 col-md-3 col-sm-6 col-xs-6 full_width_599">
                        <div class="our_course_item border_rad_5">
                            <a href="design_principle.html">
                                <img src="images/color_principle.jpg" alt="course">
                            </a>
                            <div class="caption">
                                <h3 class="bold font_s_20">Design principles, Color theories & trends</h3>
                                <p>Adobe Experience Design (XD)for Good Skill on UX UI Design</p>
                                <a href="design_principle.html"><i class="icofont-rounded-right"></i> 20 Class & Resource</a>
                            </div>
                        </div>
                    </div>
                    <div class="dis_cell col-lg-3 col-md-3 col-sm-6 col-xs-6 full_width_599">
                        <div class="our_course_item border_rad_5">
                            <a href="business_information.html">
                                <img src="images/bussiness_info.jpg" alt="course">
                            </a>
                            <div class="caption">
                                <h3 class="bold font_s_20">Business & Information Design Course</h3>
                                <p>Important for Business Person, Entrepreneur & Professional</p>
                                <a href="business_information.html"><i class="icofont-rounded-right"></i> 20 Class & Resource</a>
                            </div>
                        </div>
                    </div>
                    <div class="dis_cell col-lg-3 col-md-3 col-sm-6 col-xs-6 full_width_599">
                        <div class="our_course_item border_rad_5">
                            <a href="animation.html">
                                <img src="images/animation.jpg" alt="course">
                            </a>
                            <div class="caption">
                                <h3 class="bold font_s_20">Learn UI Animation</h3>
                                <p>Adobe Experience Design (XD)for Good Skill on UX UI Design with  Live Support,</p>
                                <a href="animation.html"><i class="icofont-rounded-right"></i> 20 Class & Resource</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Our course section end-->
        <!--Our course banner section start-->
        <div class="course_banner">
            <div class="container">
                <div class="course_banner_content">
                    <h1 class="text-center lgt">Join Now and Learn All Course <span class="clr_red bold">Tk 3,000</span> Only</h1>
                    <button class="how_lern bold bg_trans border_circle"><i class="icofont-play-alt-1"></i> How to learn?</button>
                    <button class="bg_red border_none clr_white bold border_circle text-uppercase join_us">Join Now</button>
                </div>
            </div>
        </div>
        <!--Our course banner section end-->
        <!--Emergency article section start-->
        <div class="emergency_article bg_grey">
            <div class="container">
                <h1 class="lgt text-center">Emergency article for you</h1>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 full_width_599">
                        <a href="#">
                            <div class="article border_rad_5">
                                <img src="images/article_1.jpg" alt="img">
                                <div class="article_details bg_white">
                                    <h3 class="font_s_20">What is Graphic Design</h3>
                                    <p>Graphic design is the process of visual communication and problem-solving through the use of typography, photography and illustration.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 full_width_599">
                        <a href="#">
                            <div class="article border_rad_5">
                                <img src="images/article_2.jpg" alt="img">
                                <div class="article_details bg_white">
                                    <h3 class="font_s_20">About UX Design</h3>
                                    <p>User experience design (UX, UXD, UED or XD) is the process of enhancing user satisfaction with a product by improving the usability, in the interaction the product.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 full_width_599">
                        <a href="#">
                            <div class="article border_rad_5">
                                <img src="images/article_3.jpg" alt="img">
                                <div class="article_details bg_white">
                                    <h3 class="font_s_20">Future Of Web Development</h3>
                                    <p>Web development is the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network) social network services.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    {{-- expr --}}
@endsection