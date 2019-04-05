<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <title>UX Club</title>
       @include ('frontend.partials.css')
    </head>
    <body>
        <!--Header section start-->
        <header>
            <div class="nav_ber">
              @include('frontend.partials.navbar')
            </div>
            <!--Modal section start-->
            <div id="login_singup">
                @include('frontend.partials.login')
            </div>
            <!--Modal section end-->
            <!--Payment modal section start-->
            <div class="payment_modal">
                <!-- Large modal -->
               @include('frontend.partials.paymentmodel')
            </div>
            <!--Payment modal section end-->
        </header>
        @yield('content')

        <!--Header section end-->
        <!--Header banner section start-->

        <!--Emergency article section end-->
        <!--Footer section start-->
        @include ('frontend.partials.footer')
        <!--Footer section end-->
        <!--Js start-->
        @include ('frontend.partials.script')
        <script type="text/javascript">
            $(document).ready(function () {
                $("#NextButton").click(function () {
                    $("#login_singup").hide();
                    $(".modal-backdrop").css("display", "none");
                });

                /*Video*/
                $('.video_icon').click(function () {
                    $('video')[0].play();
                });
                $('.close').click(function () {
                    $('video')[0].pause();
                });
                $('body').on('hidden.bs.modal', '.modal', function () {
                    $('video').trigger('pause');
                });
            });
        </script>
    </body>
</html>