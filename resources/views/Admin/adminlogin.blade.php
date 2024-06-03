<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="http://localhost:8000/assets/admin/css/styles.css">

    <!-- Custom Color Option -->
    <link rel="stylesheet" href="http://localhost:8000/assets/admin/css/colors.css">

    <!-- Custom Admin Option -->
    <link rel="stylesheet" href="http://localhost:8000/assets/admin/css/admin.css">

    <!--Java Script File Linked---->
    <script src="http://localhost:8000/assets/admin/js/jquery.min.js"></script>

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
        <!-- Start Navigation -->
        <div class="header header-light head-shadow">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand" href="#">
                            <img src="http://localhost:8000/assets/admin/img/Stockz-Buddy-Best-Share-Market-Tamil-YouTube-Channel.jpg"
                                class="logo centerimagecode" alt="" />
                        </a>
                        <div class="nav-toggle"></div>
                    </div>

                </nav>
            </div>
        </div>
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->


        <!-- ============================ Page Title Start================================== -->
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">

                        <div class="breadcrumbs-wrap">
                            <h1 class="breadcrumb-title">Admin Login</h1>
                            <nav aria-label="breadcrumb">
                                <!-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                                </ol> -->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============================ Page Title End ================================== -->

        <!-- ========================== Login Section =============================== -->
        <section class="pt-0 centerlogin">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="log_wrap mediascreensize">
                            <!-- <h4>Sign In</h4> -->
                            <!-- <h4>Sign Up</h4> -->
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="login-form">
                                <form method="POST" action="{{ route('admin.login.submit') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="email">Email <span style="color: red;">*</span> </label>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password <span style="color: red;">*</span></label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <button type="submit" name="validate"
                                            class="btn btn-md full-width pop-login">Login</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================== Login Section =============================== -->


        <!-- ============================ Footer Start ================================== -->
        <footer class="dark-footer skin-dark-footer">
            <div>
                <div class="container">
                    <div class="row align-items-center">



                        <div class="col-lg-12 col-md-12 text-center">
                            <ul class="footer-bottom-social" style="padding-bottom:20px">
                                <li><a href="#">Privacy Policy</a></li> &nbsp;| &nbsp;
                                <li><a href="#">Terms of Use</a></li> &nbsp;| &nbsp;
                                <li><a href="#">Refund Policy</a></li>  &nbsp;| &nbsp;
                                <li><a href="#">Help Desk</a></li>

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

                        </div>
                        <div class="col-lg-4 col-md-4" align="center">
                            <p class="mb-0">Designd By <a href="https://www.a2zmadurai.com">Wecare Technologies</a>.</p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!-- ============================ Footer End ================================== -->



        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!-- <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/custom.js"></script> -->



    <script src="http://localhost:8000/assets/admin/js/jquery.min.js"></script>
    <script src="http://localhost:8000/assets/admin/js/popper.min.js"></script>
    <script src="http://localhost:8000/assets/admin/js/bootstrap.min.js"></script>
    <script src="http://localhost:8000/assets/admin/js/select2.min.js"></script>
    <script src="http://localhost:8000/assets/admin/js/slick.js"></script>
    <script src="http://localhost:8000/assets/admin/js/counterup.min.js"></script>
    <script src="http://localhost:8000/assets/admin/js/custom.js"></script>

    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="http://localhost:8000/assets/admin/js/metisMenu.min.js"></script>

    <script>
        $('#side-menu').metisMenu();
    </script>

</body>

</html>