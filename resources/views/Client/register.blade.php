<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />


    <!-- SEO Setup Start-->
    <title> Learn Stock Market Basics in Tamil Language via Stockz Buddy YouTube Channel</title>
    <meta name="description"
        content="Stockz Buddy offers for extra guidance and additional information about investing & trading strategies " />
    <meta name="keywords"
        content="Tamil Share Market Videos,Tamil Stock Market Videos, StockzBuddy, Tamil Share Market YouTube Channel">
    <meta name="og:title" content="Best & Leading Share Market Tamil Language YouTube Channel " />
    <meta name="og:description"
        content=" Stockz Buddy will help you strengthen your stock markey basics and provide you with quality share market videos" />

    <meta property="og:image:alt" content="Stockz Buddy is a most likeable Tamil Share Market YouTube Video Channel">
    <meta name="og:url" content="http://www.stockzbuddy.com" />
    <meta name="og:image"
        content="http://www.stockzbuddy.com/assets/img/Stockz-Buddy-Best-Share-Market-Tamil-YouTube-Channel.jpg" />
    <meta name="og:image"
        content="http://www.stockzbuddy.com/assets/img/Stockz-Buddy-Best-Share-Market-Tamil-YouTube-Channel.jpg" />
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <meta property="og:locale" content="en_GB" />
    <meta name="og:site_name"
        content="Learn Stock Market basics video in Tamil Language : Stockz Buddy Youtube Channel is the best Option" />
    <meta property="og:type" content="Website">
    <meta name="author" content="Mr.M.Jeya Ganesh - Proprietor  - Managing Director of Stockz Buddy" />
    <meta name="og:email" content="enquiry@stockzbuddy.com" />
    <meta name="og:phone_number" content="+91 - 9865334143" />
    <meta name="og:street-address" content="Stockz Buddy ,No.6B APK Road,Villapuram,Madurai-625012,Tamilnadu,India. " />
    <meta name="og:locality" content="Madurai" />
    <meta name="og:region" content="Tamilnadu " />
    <meta name="og:postal-code" content="625012 " />
    <meta name="og:country-name" content="India" />
    <meta name="language" content="EN">
    <meta name="robots" content="index,follow" />
    <link rel="canonical" href="http://www.stockzbuddy.com">
    <link rel="icon" href="assets/img/Stockz-Buddy-Tamil-YouTube-Channel.jpg" />

    <!-- SEO Setup End-->

    <!-- Custom CSS -->
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- Custom Color Option -->
    <link href="assets/css/colors.css" rel="stylesheet">

    <!--Java Script File Linked---->
    <script src="assets/js/script.js"></script>
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
                            <img src="assets/img/Stockz-Buddy-Best-Share-Market-Tamil-YouTube-Channel.jpg"
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
                            <h1 class="breadcrumb-title">Create An Account</h1>
                            <nav aria-label="breadcrumb">
                                
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

                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="log_wrap mediascreensizeOne">
                            <!-- <h4>Sign Up</h4> -->
                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @elseif (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif
                            <div class="login-form">
                                <form id="registerForm" action="{{ route('register') }}" method="POST"
                                    onsubmit="return validateForm()">
                                    @csrf

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="name">Name <span style="color: red;">*</span> </label>
                                                <input type="text" name="name" id="name" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <label for="email">Email <span style="color: red;">*</span> </label>
                                                <input type="email" name="email" id="email" class="form-control"
                                                    required>
                                                <div id="emailError" class="invalid-feedback"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="phonenumber">WhatsApp Number <span style="color: red;">*</span> </label>
                                        <input type="text" name="phonenumber" id="phonenumber" class="form-control"
                                            required>
                                        <div id="phoneError" class="invalid-feedback"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md full-width pop-login">Sign Up</button>
                                    </div>
                                </form>
                                <p style="margin-left: 21%; padding: 7px; font-size: 17px;">Already have an account? <a href="{{ url('login')}}" style="color: rgb(37, 37, 221); font-weight: 600;">Login In</a></p>
                            </div>

                            <script>
                                function validateForm() {
                                    var email = document.getElementById("email").value;
                                    var phoneNumber = document.getElementById("phonenumber").value;

                                    // Email validation
                                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                                    if (!emailRegex.test(email)) {
                                        // document.getElementById("emailError").innerHTML = "Please enter a valid email address.";
                                        alert("Please enter a valid email address")
                                        return false;
                                    } else {
                                        document.getElementById("emailError").innerHTML = "";
                                    }

                                    // Phone number validation (Assuming 10-digit number)
                                    var phoneRegex = /^\d{10}$/;
                                    if (!phoneRegex.test(phoneNumber)) {
                                        // document.getElementById("phoneError").innerHTML = "Please enter a valid 10-digit phone number.";
                                        alert("Please enter a valid 10-digit phone number.")
                                        return false;
                                    } else {
                                        document.getElementById("phoneError").innerHTML = "";
                                    }

                                    return true; // Form submission will proceed if all validations pass
                                }
                            </script>

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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="assets/js/metisMenu.min.js"></script>
    <script>
        $('#side-menu').metisMenu();
    </script>

</body>

</html>