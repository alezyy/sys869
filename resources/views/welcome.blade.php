<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PROOF OF CREDENTIAL</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #2d3246;
                background-image: url("/diplo3.gif");
                background-position: center;
                background-repeat: no-repeat;
                background-size:cover;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .context-dark, .bg-gray-dark, .bg-primary {
                color: rgba(255, 255, 255, 0.8);
            }

            .footer-classic a, .footer-classic a:focus, .footer-classic a:active {
                color: #ffffff;
            }
            .nav-list li {
                padding-top: 5px;
                padding-bottom: 5px;
            }

            .nav-list li a:hover:before {
                margin-left: 0;
                opacity: 1;
                visibility: visible;
            }

            ul, ol {
                list-style: none;
                padding: 0;
                margin: 0;
            }

            .social-inner {
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
                padding: 23px;
                font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                text-transform: uppercase;
                color: rgba(255, 255, 255, 0.5);
            }
            .social-container .col {
                border: 1px solid rgba(255, 255, 255, 0.1);
            }
            .nav-list li a:before {
                content: "\f14f";
                font: 400 21px/1 "Material Design Icons";
                color: #4d6de6;
                display: inline-block;
                vertical-align: baseline;
                margin-left: -28px;
                margin-right: 7px;
                opacity: 0;
                visibility: hidden;
                transition: .22s ease;
            }

        </style>
    </head>

    <body>

        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                    @endauth
                </div>
            @endif

            <div class="content" style="padding-top: 700px">
                <div class="links" style="padding-left: 95px">
                    <a href="/login" style="color:#1722bf; font-size:14px; font-family: Verdana" ><strong>ADMIN</strong></a>
                    <a href="/login" style="color:#1722bf; font-size:14px; font-family: Verdana">DEAN</a>
                    <a href="/login" style="color:#1722bf; font-size:14px; font-family: Verdana ">TEACHER</a>
                    <a href="/login" style="color:#1722bf; font-size:14px; font-family: Verdana">STUDENT</a>
                    <a href="http://sys869-ets-projet.ml/" style="color:#1722bf; font-size:14px; font-family:Verdana">[CHECK CREDENTIAL IN BLOCKCHAIN]</a>
                </div>


            </div>
        </div>

    </body>
    <footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
        <div class="container">
            <br>
            <div class="row row-30">
                <div class="col-md-4 col-xl-5">
                    <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                        <div>
                            <strong style="color:#e8ebef; font-size:50px; padding-left: 0px;">DiplomA.::.thereum</strong>
                        </div>
                        <br>
                        <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion, business consulting, and marketing.</p>
                        <!-- Rights-->
                        <p class="rights"><span>©  </span><span class="copyright-year">2019</span><span> </span><span>FRAFA Inc.</span><span>. </span><span>All Rights Reserved.</span></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>Contacts</h5>
                    <dl class="contact-list">
                        <dt>Address:</dt>
                        <dd>278 Notre Dame Ouest, Montreal</dd>
                    </dl>
                    <dl class="contact-list">
                        <dt>email:</dt>
                        <dd><a href="mailto:#">diploma@diplomathereum.com</a></dd>
                    </dl>
                    <dl class="contact-list">
                        <dt>phones:</dt>
                        <dd><a href="tel:#">438.765.7686</a> <span>or</span> <a href="tel:#">438.765.7686</a>
                        </dd>
                    </dl>
                </div>
                <div class="col-md-4 col-xl-3">
                    <h5>Links</h5>
                    <ul class="nav-list">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Pricing</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row no-gutters social-container">
            <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
            <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
            <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
            <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
        </div>
    </footer>
</html>
