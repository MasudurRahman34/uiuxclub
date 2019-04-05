                <div class="modal fade bs-example-modal-lg login_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg modal_lg" role="document">
                        <div class="container">
                            <div class="modal-content">
                                <button type="button" class="close font_s_30 lgt" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="icofont-close-line"></i></span></button>
                                <div class="modal_content">
                                    <div class="login text-center bg_red">
                                        <h1 class="font_s_30 clr_white lgt">You are Already Member?<br> <span class="reg">Log In</span> to Start Learning</h1>
                                        @include ('frontend.partials.messages')
                                         <form action="{{ route('login') }}" method='post'>
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control font_s_20 clr_lgt_grey border_nonel{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus id="EmailAddress" placeholder="Email">
                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name='password'  class="form-control font_s_20 clr_lgt_grey border_nonel{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="MemberShipId" placeholder="password" required>

                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                            <button type="submit" class="full_width border_none btn_cus bg_deep_red clr_white border_rad_5 font_s_20">Start Learning</button>
                                        </form>
                                    </div>
                                    <div class="sing_up text-center">
                                        <h1 class="font_s_30 lgt"> <span class="reg clr_red">Sign Up </span> to Get Membership ID</h1>


                                        <form method="POST" action="{{ route('register') }}">
                                            <div class="form-group">
                                                <input type="text" class="form-control font_s_20 clr_lgt_grey border_grey_lgt box_shadow_none" id="FullName" placeholder="Full Name" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control font_s_20 clr_lgt_grey border_grey_lgt box_shadow_none" id="EmailAddress" placeholder="Email" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control font_s_20 clr_lgt_grey border_grey_lgt box_shadow_none" id="PhoneNumber" placeholder="Phone Number" required>
                                            </div>
                                             <button type="button" id="NextButton" class="full_width border_none btn_cus bg_red clr_white border_rad_5 font_s_20" data-toggle="modal" data-target=".PaymentModal">Next <i class="icofont-rounded-right"></i></button> 
                                            
                                        </form> 

                                        <!--Modal: Login / Register Form-->

 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>