<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA compatible" content="IE=edge">
        <meta name="vewport" content="width=divice-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name', 'voyage')}}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awsome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/gijgo.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('css/nice-select.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/themify-icon.css') }}" rel="stylesheet">


    </head>
    <body>
        @include('inc.navbar')
        <br>
        @yield('content')
        <footer class="footer-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-sm-6 col-md-5">
                        <div class="single-footer-widget">
                            <h4>Discover Destination</h4>
                            <ul>
                                <li><a href="#">Miami, USA</a></li>
                                <li><a href="#">California, USA</a></li>
                                <li><a href="#">London, UK</a></li>
                                <li><a href="#">Saintmartine, Bangladesh</a></li>
                                <li><a href="#">Mount Everast, India</a></li>
                                <li><a href="#">Sidney, Australia</a></li>
                                <li><a href="#">Miami, USA</a></li>
                                <li><a href="#">California, USA</a></li>
                                <li><a href="#">London, UK</a></li>
                                <li><a href="#">Saintmartine, Bangladesh</a></li>
                                <li><a href="#">Mount Everast, India</a></li>
                                <li><a href="#">Sidney, Australia</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="single-footer-widget">
                            <h4>Subscribe Newsletter</h4>
                            <div class="form-wrap" id="mc_embed_signup">
                                <form target="_blank"
                                    action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                    method="get" class="form-inline">
                                    <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                        required="" type="email">
                                    <button class="click-btn btn btn-default text-uppercase"> <i class="far fa-paper-plane"></i>
                                    </button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                            type="text">
                                    </div>

                                    <div class="info"></div>
                                </form>
                            </div>
                            <p>Subscribe our newsletter to get update news and offers</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="single-footer-widget footer_icon">
                            <h4>Contact Us</h4>
                            <p>4156, New garden, New York, USA
                                    +880 362 352 783</p>
                            <span>contact@martine.com</span>
                            <div class="social-icons">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-twitter-alt"></i></a>
                                <a href="#"><i class="ti-pinterest"></i></a>
                                <a href="#"><i class="ti-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="copyright_part_text text-center">
                            <p class="footer-text m-0">
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>

    <!-- Scripts -->
    <!-- jquery plugins here-->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- magnific js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- masonry js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- masonry js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</html>

