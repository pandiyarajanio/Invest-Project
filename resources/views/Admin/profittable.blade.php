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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                                class="logo logoSize" alt="" />
                        </a>
                        <div class="nav-toggle"></div>
                    </div>
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
        <div class="container-fluid ">

            <div class="row">

                <div class="col-lg-3 col-md-3 p-0 hidden-xs ">
                    <div class="dashboard-navbar bgColour">
                        <div class="d-user-avater">
                            <img src="http://127.0.0.1:8000/assets/admin/img/logoadmin.jpg" class="img-fluid avater"
                                alt="">
                            <h4 style="color: #fff; font-weight: 700;">Admin</h4>
                        </div>
                        <div class="d-navigation">
                            <ul id="side-menu">
                                <li class="active "><a href="{{ url('admin/dashboard') }}"><i
                                            class="fa-solid fa-users-line"></i>Users
                                        Activation</a></li>
                                <li>
                                    <a href="{{ url('admin/userlist') }}" style="color: #fff;"><i
                                            class="fa-solid fa-users-line"></i>Users List</a>
                                </li>
                                <li><a href="#" style="color: #fff;"><i class="fa-solid fa-comment"></i> User Wise
                                        Report</a></li>
                                <li class="dropdown">
                                    <a href="#" style="color: #fff; "><i class="fa-solid fa-bag-shopping"></i>Amount<i
                                            class="fa-solid fa-arrow-down" style="margin-left: 66%;"></i></a>
                                    <ul class="nav nav-second-level" style="color: #fff;">
                                        <li><a href="{{ url('admin/Investment') }}" style="color: #fff !important;">Investment
                                                Amount</a>
                                        </li>
                                        <li><a href="{{ url('/admin/profit') }}" style="color: #fff !important;">Today
                                                Trade</a></li>
                                        <li><a href="#" style="color: #fff !important;">Fund
                                                Request</a></li>
                                        <li><a href="withdrawrequest.html" style="color: #fff !important;">Withdraw
                                                Request </a>
                                        </li>
                                        <li><a href="#" style="color: #fff !important;">Trading
                                                Charges</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" style="color: #fff;"><i class="fa-solid fa-users"></i>Reports</a>
                                </li>
                                <li><a href="{{ url('/admin/change-password') }}" style="color: #fff;"><i
                                            class="fa-solid fa-lock"></i>Change
                                        Password</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-md-9 col-sm-12">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                            <form style="margin-left: 58%; margin-top: 6%; font-weight: 600;" class="form-perc" action="{{ route('updateProfitPercentage') }}" method="post">
                                @csrf
                                <label for="profit_percentage">Profit Percentage:</label>
                                <input type="number" id="profit_percentage" name="profit_percentage" value="{{ session('profitPercentage', 5) }}" />
                                <button type="submit">Update</button>
                            </form>
                            <div class="dashboard_container mediascreensize otherbg" style="margin-top: 3%;">

                                <div class="dashboard_container_header">
                                    <div class="dashboard_fl_1">
                                        <h4>Profit Amount Details</h4>
                                    </div>
                                </div>
                                <div class="dashboard_container_body ">
                                    <div class="table-responsive ">
                                        <table class="table table-bordered ">
                                            <thead class="thead-dark ">
                                                <tr>

                                                    <th scope="col" class="bgColour">Date</th>
                                                    <th scope="col" class="bgColour">Investment Amount</th>
                                                    <th scope="col" class="bgColour">Profit Percentage</th>
                                                    <th scope="col" class="bgColour">Profit Amount</th>
                                                    <th scope="col" class="bgColour">Current Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $item)
                                                <tr>
                                                    <td>{{ $item['date'] }}</td>
                                                    <td>{{ $item['total_investment_amount'] }}</td>
                                                    <td>{{ $item['profit_percentage'] }}</td>
                                                    <td>{{ $item['total_profit_amount'] }}</td>
                                                    <td>{{ $item['next_amount'] }}</td>
                                                </tr>
                                            @endforeach
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



    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

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