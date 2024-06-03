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
                            <img src="assets/img/Stockz-Buddy-Best-Share-Market-Tamil-YouTube-Channel.jpg" class="logo"
                                alt="" />
                        </a>
                        <div class="nav-toggle"></div>
                    </div>
                    <div class="nav-menus-wrapper" style="transition-property: none;">

                        <ul class="nav-menu">

                            <li><a href="/home">Dashboard </a></li>
                            <li><a href="#">Funds<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="/deposit">Deposit</a></li>
                                    <li><a href="/withdrawal">Withdrawal</a></li>
                                    <li><a href="/downloads">Downloads</a></li>
                                </ul>
                            </li>
                            <li><a href="/profile"> Profile</a></li>

                            <li><a href="#">Settings<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="/eprofile">Edit Profile</a></li>
                                    <li><a href="/photoupdate">Edit Photo</a></li>
                                    <li><a href="/ebank">Edit Bank Details</a></li>
                                    <li><a href="/change-password">Change Password</a></li>

                                </ul>
                            </li>

                            <li class="active"><a href="#">Reports<span class="submenu-indicator"></span></a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="/accountssummary">Accounts Summary</a></li>
                                    <li class="active"><a href="/tradesummary">Trading Summary</a></li>


                                </ul>
                            </li>

                            <li class="active">
                                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit"
                                        style="background-color: #3a6ab9; border: none; border-radius: 4px;">Logout</button>
                                </form>
                            </li>
                        </ul>



                    </div>
                </nav>
            </div>
        </div>
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->


        <!-- ============================ Dashboard: Dashboard Start ================================== -->
        <section class="gray pt-0">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-lg-3 col-md-3 p-0 hidden-xs ">
                        <div class="dashboard-navbar">

                            <div class="d-user-avater">
                                @if(auth()->user()->avatar)
                                <img src="{{ asset('storage/avatars/' . auth()->user()->avatar) }}"
                                    class="img-fluid avater" alt="">
                                @else
                                <p>No Record Found</p>
                                @endif
                                <h4>{{ Auth::user()->name }}</h4>
                                <h5 style="color:#FFFFFF; font-size:15px">Canada USA</h5>
                            </div>

                            <div class="d-navigation">
                                <ul id="side-menu">
                                    <li class="active"><a href="/home"><i class="ti-user"></i>Dashboard</a></li>
                                    <li class="dropdown">
                                        <a href="#"><i class="ti-money"></i>Funds<span class="ti-angle-left"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li><a href="/deposit">Deposit</a></li>
                                            <li><a href="/withdrawal">Withdrawal</a></li>
                                            <li><a href="downloads">Downloads</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/profile"><i class="ti-heart"></i> Profile</a></li>
                                    <li class="dropdown">
                                        <a href="#"><i class="ti-layers"></i>Settings<span
                                                class="ti-angle-left"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li><a href="/eprofile">Edit Profile</a></li>
                                            <li><a href="/photoupdate">Edit Photo</a></li>
                                            <li><a href="/ebank">Edit Bank Details</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown">
                                        <a href="#"><i class="ti-download"></i>Reports<span
                                                class="ti-angle-left"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li><a href="/accountssummary">Accounts Summary</a></li>
                                            <li><a href="/tradesummary">Trading Summary</a></li>
                                        </ul>
                                    </li>
                                    <!-- <li><a href="#"><i class="ti-power-off"></i>
                      <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit"
                          style="background-color: #003783; border: none; border-radius: 4px;">Logout</button>
                      </form>
                    </a></li> -->
                                </ul>
                            </div>

                        </div>


                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12">

                        <!-- Row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 pt-4 pb-4">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Welcome</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ Auth::user()->name }}
                                        </li>

                                    </ol>
                                </nav>
                                <div class="d-user-avater" style="margin:0px">
									<img src="{{ asset('storage/avatars/' . auth()->user()->avatar) }}" class="img-fluid avater imagelasted" alt="" width="20%"
										style="margin-top:-100px; margin-left:200px">

								</div>
                            </div>
                        </div>
                        <!-- /Row -->

                        <!-- Row -->
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="dashboard_container">
                                    <div class="dashboard_container_header">
                                        <div class="dashboard_fl_1">
                                            <h4>Accounts</h4>
                                        </div>
                                    </div>

                                    <!-- Row -->
                                    <div class="row">

                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="dashboard_stats_wrap widget-1">
                                                <div class="dashboard_stats_wrap_content" align="center">
                                                    <h4>200000</h4> <span>Investment Amount</span>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="dashboard_stats_wrap widget-2" align="center">
                                                <div class="dashboard_stats_wrap_content" align="center">
                                                    <h4>0.01 %</h4> <span>Overall Returns % </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="dashboard_stats_wrap widget-3">
                                                <div class="dashboard_stats_wrap_content" align="center">
                                                    <h4>4012</h4> <span>Return Amount</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="dashboard_stats_wrap widget-4">
                                                <div class="dashboard_stats_wrap_content" align="center">
                                                    <h4>204012</h4> <span>Current Amount</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Row -->
                                    <div class="row">

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="dashboard_container">
                                                <div class="dashboard_container_header">
                                                    <div class="dashboard_fl_1">
                                                        <h4>Search Reports</h4>
                                                    </div>
                                                </div>
                                                <div class="dashboard_container_body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead class="thead-dark">
                                                                <tr>
                                                                    <th scope="col">From Date</th>

                                                                    <th scope="col">To Date</th>

                                                                    <th scope="col">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>

                                                                    <td> </td>
                                                                    <td> </td>
                                                                    <td>
                                                                        <div class="dash_action_link">
                                                                            <a href="#" class="view">Search & Download
                                                                                Report</a>

                                                                        </div>
                                                                    </td>


                                                                </tr>




                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                    </div>
                                    <!-- /Row -->
                                    <!-- /Row -->


                                    <div class="dashboard_container_body">

                                        <div class="dashboard_container_header">
                                            <div class="dashboard_fl_1">
                                                <h4>Performance Report</h4>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead-dark">
                                                    <tr>

                                                        <th scope="col">Date</th>

                                                        <th scope="col">Net P/L %</th>
                                                        <th scope="col">Net P/L Value </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td>01.04.2024 - 30.04.2024</td>
                                                        <td>0.01% </td>
                                                        <td><span class="payment_status complete">1500</span></td>

                                                    </tr>

                                                    <tr>

                                                        <td>01.05.2024 - 31.05.2024</td>
                                                        <td>0.01% </td>
                                                        <td><span class="payment_status pending">1500</span></td>

                                                    </tr>




                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>






                        </div>
                        <!-- /Row -->





                    </div>

                </div>

            </div>
        </section>
        <!-- ============================ Dashboard: Dashboard End ================================== -->


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