<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA compatible" content="IE=edge">
        <meta name="vewport" content="width=divice-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name', 'Application JDR')}}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="{{ asset(././css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <header class="main_menu">
            <div class="sub_menu">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12 col-md-6">
                            <div class="sub_menu_right_content">
                                <span>Top destinations</span>
                                <a href="#">Asia</a>
                                <a href="#">Europe</a>
                                <a href="#">America</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12 col-md-6">
                            <div class="sub_menu_social_icon">
                                <a href="#"><i class="flaticon-facebook"></i></a>
                                <a href="#"><i class="flaticon-twitter"></i></a>
                                <a href="#"><i class="flaticon-skype"></i></a>
                                <a href="#"><i class="flaticon-instagram"></i></a>
                                <span><i class="flaticon-phone-call"></i>+880 356 257 142</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main_menu_iner">
                <div class="container">
                    <div class="row align-items-center ">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                                <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse main-menu-item justify-content-center"
                                    id="navbarSupportedContent">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.html">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="packages.html">packages</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Blog
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="blog.html">Blog</a>
                                                <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                pages
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                                <a class="dropdown-item" href="top_place.html">top place</a>
                                                <a class="dropdown-item" href="tour_details.html">tour details</a>
                                                <a class="dropdown-item" href="elements.html">Elements</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="#" class="btn_1 d-none d-lg-block">book now</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner">
                            <div class="breadcrumb_iner_item text-center">
                                <h2>About Us</h2>
                                <p>home . about us</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div>
            @yield('content')
        </div>
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
                            <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    <!-- Scripts -->
    <!-- jquery plugins here-->
    <script src="././js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="././js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="././js/bootstrap.min.js"></script>
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

