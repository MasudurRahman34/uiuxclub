  <nav class="navbar navbar-default">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img src="{{ asset('images/ux_club_logo.png') }}" alt="logo">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <div class="navbar-right">
                                <ul class="nav navbar-nav ">
                                    <!--<li class="text-uppercase"><a href="#">Ux club</a></li>-->
                                    <li class="dropdown text-uppercase">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ux club <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('story') }}">UX Club Story</a></li>
                                            <li><a href="{{ route('members') }}">Members</a></li>
                                            <li><a href="#">Events</a></li>
                                            <li><a href="#">Service</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown text-uppercase">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COURSES <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            @foreach (App\model\courseitem::orderBy('id', 'desc')->get() as $courseitem)

                                            <li><a href="{!! route('singlecourse.show', $courseitem->slug) !!}">{{$courseitem->course_name}}</a></li> 
                                            @endforeach 
                                            <!-- <li><a href="mobile_app_design.html">Mobile App Design</a></li>
                                            <li><a href="graphic_design.html">Experience Design</a></li>
                                            <li><a href="graphic_design.html">Graphic Design</a></li>
                                            <li><a href="useability.html">User Research & Usability</a></li>
                                            <li><a href="design_principle.html">Design Principles & Color</a></li>
                                            <li><a href="business_information.html">Business Information</a></li>
                                            <li><a href="animation.html">Animation</a></li> -->
                                        </ul>
                                    </li>
                                    <li class="text-uppercase"><a href="{{ route('members') }}">MEMBERS</a></li>
                                    <li class="text-uppercase"><a href="resource.html">RESOURCE</a></li>
                                    <li class="text-uppercase"><a href="{{route('contact')}}">Contact</a></li>
                                   <form class="form-inline" action="{{ route('user.logout') }}" method="post">
                  @csrf
                  <input type="submit" value="sign out" class="btn btn-danger">
                  
                </form>
                                </ul>
                                <button class="lern bg_trans border_circle bold full_width_480 video_icon" data-toggle="modal" data-target="#video"><i class="icofont-play-alt-1"></i> How to learn?</button>
                                <!--Header video here-->
                                <div class="modal fade video_modal" id="video" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h4 class="font_s_20 bold">Learn all the Basic tools of Photoshop for UI Design</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="clr_grey" aria-hidden="true">&times;</span></button>
                                                <div class="header_video">
                                                   <!--  <iframe width="853" height="480" src="https://www.youtube.com/embed/QQ1flK9JGOo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                                                    <video controls loop class="full_width">
                                                        <source src="{{ asset('assets/About XD Interface & UI Kit.mp4') }} " type="video/mp4">
                                                    
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/Header video here-->
                               
                                @auth("web") 
                                <button class="btn_cus join_us clr_white bg_red border_none border_circle bold text-uppercase full_width_480 "> Hi 

                                    Mr. {{ $user = Auth::User()->name}}</button>
 
                            @endauth
                            @auth("admin")
                            You're an administrator!
                            @endauth

                            @guest
                             <button class="btn_cus join_us clr_white bg_red border_none border_circle bold text-uppercase full_width_480" data-toggle="modal" data-target=".bs-example-modal-lg">Join Now</button>
                            @endguest
                            </div>
                        </div>
                    </div>
                </nav>