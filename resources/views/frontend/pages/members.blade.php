@extends('frontend.layouts.master')

@section('content')
        <!--Header section end-->
        <!--Member section start-->
        <section class="our_members">
            <div class="container">
                <div class="page_title">
                    <h1 class="lgt font_s_50 text-center">Meet Our Members</h1>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-9 col-md-offset-1 full_width_599">
                    	 @foreach ($members as $member)
                        <div class="member">
                            <div class="member_img">
                                <img src="{{ asset('images/'.$member->membersimage) }}" alt="member" />
                            </div>
                            <div class="member_info">
                                <h3>{{$member->members_name}}</h3>
                                <h5>{{$member->courses_title}}</h5>
                                <p>{{$member->comment}}</p>
                                <button class="border_circle bg_trans">View Portfolio</button>
                            </div>
                        </div>
                        @endforeach
                        <div class="member">
                            <div class="member_img ">
                                <img src="images/member2.png" alt="member" />
                            </div>
                            <div class="member_info">
                                <h3>Sharmin Akhter Soma</h3>
                                <h5>Member of UX Club</h5>
                                <p>a consonant.rstand that you are not asking about a specific type of gift or a specific item. “I am going to bring an apple pie,”</p>
                                <button class="border_circle bg_trans">View Portfolio</button>
                            </div>
                        </div>
                        <div class="member">
                            <div class="member_img">
                                <img src="images/member3.png" alt="member" />
                            </div>
                            <div class="member_info">
                                <h3>Shahed Hossain</h3>
                                <h5>Member of UX Club</h5>
                                <p>a consonant.rstand that you are not asking about a specific type of gift or a specific item. “I am going to bring an apple pie,”</p>
                                <button class="border_circle bg_trans">View Portfolio</button>
                            </div>
                        </div>
                        <div class="member">
                            <div class="member_img">
                                <img src="images/member4.png" alt="member" />
                            </div>
                            <div class="member_info">
                                <h3>Umme Honey</h3>
                                <h5>Member of UX Club</h5>
                                <p>a consonant.rstand that you are not asking about a specific type of gift or a specific item. “I am going to bring an apple pie,”</p>
                                <button class="border_circle bg_trans">View Portfolio</button>
                            </div>
                        </div>
                        <div class="member">
                            <div class="member_img">
                                <img src="images/member5.png" alt="member" />
                            </div>
                            <div class="member_info">
                                <h3>Alamin Molla</h3>
                                <h5>Member of UX Club</h5>
                                <p>a consonant.rstand that you are not asking about a specific type of gift or a specific item. “I am going to bring an apple pie,”</p>
                                <button class="border_circle bg_trans">View Portfolio</button>
                            </div>
                        </div>
                        <div class="member">
                            <div class="member_img">
                                <img src="images/member6.png" alt="member" />
                            </div>
                            <div class="member_info">
                                <h3>Tamanna Rahman</h3>
                                <h5>Member of UX Club</h5>
                                <p>a consonant.rstand that you are not asking about a specific type of gift or a specific item. “I am going to bring an apple pie,”</p>
                                <button class="border_circle bg_trans">View Portfolio</button>
                            </div>
                        </div>
                        <div class="member">
                            <div class="member_img">
                                <img src="images/member7.png" alt="member" />
                            </div>
                            <div class="member_info">
                                <h3>Rahul Ruhi</h3>
                                <h5>Member of UX Club</h5>
                                <p>a consonant.rstand that you are not asking about a specific type of gift or a specific item. “I am going to bring an apple pie,”</p>
                                <button class="border_circle bg_trans">View Portfolio</button>
                            </div>
                        </div>
                        <div class="member">
                            <div class="member_img">
                                <img src="images/member8.png" alt="member" />
                            </div>
                            <div class="member_info">
                                <h3>Tanver Hossain</h3>
                                <h5>Member of UX Club</h5>
                                <p>a consonant.rstand that you are not asking about a specific type of gift or a specific item. “I am going to bring an apple pie,”</p>
                                <button class="border_circle bg_trans">View Portfolio</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       @endsection
        <!--Member section end-->
        <!--Footer section start-->