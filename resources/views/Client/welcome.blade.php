<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="www.frebsite.nl" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Stockz Buddy</title>

    <!-- Custom CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- Custom Color Option -->
    <link href="assets/css/colors.css" rel="stylesheet">
</head>

<body class="red-skin">

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div id="preloader">
        <div class="preloader"><span></span><span></span></div>
    </div>


    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <div class="alert alert_top alert-dismissible fade show" role="alert">
            <div class="container">
                <div class="alert_caption">
                    <div class="alert_rate">

                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Welcome To Stockz Buddy <strong>Investor Portal &nbsp;</strong> &nbsp;</p>
                    <div class="alert_rate">

                        <i class="fas fa-star"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>

                    </div>
                </div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span> </button>
            </div>
        </div>

        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->


        <!-- ============================ Agency List Start ================================== -->
        <div class="image-cover half_banner" style="background:#0b2248 url(assets/img/banner-3.jpg) no-repeat;">
            <div class="container">
                <!-- Type -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="banner-search-2">
                            <h1 class="cl_2 f_2 mb-0">Start Earning <br><span class="theme-cl">Daily</span></h1>
                            <p>Study any topic, anytime. Choose from thousands of expert-led courses now.</p>
                            <div class="form-group">
                                @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="btn btn-theme">Login</a>
                                @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-theme">New User</a>
                                @endif
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================ Agency List End ================================== -->




        <!-- ============================ Footer Start ================================== -->
        <footer class="dark-footer skin-dark-footer">
            <div>
                <div class="container">
                    <div class="row align-items-center">



                        <div class="col-lg-12 col-md-12 text-center">
                            <ul class="footer-bottom-social" style="padding-bottom:20px">
                                <li><a href="#">Privacy Policy</a></li> &nbsp;| &nbsp;
                                <li><a href="#">Terms of Use</a></li> &nbsp;| &nbsp;
                                <li><a href="#">Refund Policy</a></li> &nbsp;| &nbsp;
                                <li><a href="contactus.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-4 col-md-4">
                            <p class="mb-0">© <span id="demo"></span> StockzBuddy.com All rights reserved. </p>
                        </div>

                        <div class="col-lg-4 col-md-4" align="center">
                            <p class="mb-0">Designd By <a href="https://www.a2zmadurai.com">Wecare Technologies</a>.</p>
                        </div>

                        <div class="col-lg-4 col-md-4 text-right">
                            <ul class="footer-bottom-social">
                                <li><a href="https://www.facebook.com/StockzBuddy-102505609225254" target="_blank"><i
                                            class="ti-facebook"></i></a></li>
                                <li><a href="https://twitter.com/StockzBuddy" target="_blank"><i
                                            class="ti-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/stockzbuddy/" target="_blank"><i
                                            class="ti-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/StockzBuddy/" target="_blank"><i
                                            class="ti-linkedin"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCtAXiAv5wPGx8vIIugOhvaA"
                                        target="_blank"><i class="ti-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ============================ Footer End ================================== -->


        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
</body>

</html>