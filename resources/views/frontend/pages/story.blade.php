@extends('frontend.layouts.master')

@section('content')
        <!--Header section end-->
        <!--Member section start-->

         <section class="stories">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
                    	 @foreach ($story as $story)
                        <div class="our_story">
                            <h1 class="lgt font_s_50">{{$story->title}} </h1>
                            <p>{{$story->description}} </p>
                            <img src="{{ asset('images/'.$story->imagefile) }}" alt="img" class="img-responsive"/>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
@endsection    
        <!--UX club story page end-->
        <!--Footer section start-->