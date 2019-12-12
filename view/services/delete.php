<?php session_start();

if ($_SESSION['role'] != 'admin') {
    header('location:loggedin.php');
}


?>
<!DOCTYPE html>
<<<<<<< HEAD <html lang="en" dir="ltr" style="font-size: 100%;">

    <head>
        =======
        <html lang="en" dir="ltr">

        <head>
            >>>>>>> master
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <title>Welcome <?php if (isset($_SESSION['name'])) echo $_SESSION['name']; ?>!</title>
            <!-- GOOGLE FONTS -->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
            <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />


            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css" />




            <!-- PLUGINS CSS STYLE -->
            <link href="../assetsAdmin/plugins/toaster/toastr.min.css" rel="stylesheet" />
            <link href="../assetsAdmin/plugins/nprogress/nprogress.css" rel="stylesheet" />
            <link href="../assetsAdmin/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet" />
            <link href="../assetsAdmin/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
            <link href="../assetsAdmin/plugins/ladda/ladda.min.css" rel="stylesheet" />
            <link href="../assetsAdmin/plugins/select2/css/select2.min.css" rel="stylesheet" />
            <link href="../assetsAdmin/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
            <script src="../assetsAdmin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="../assetsAdmin/plugins/toaster/toastr.min.js"></script>
            <script src="../assetsAdmin/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
            <script src="../assetsAdmin/plugins/charts/Chart.min.js"></script>
            <script src="../assetsAdmin/plugins/ladda/spin.min.js"></script>
            <script src="../assetsAdmin/plugins/ladda/ladda.min.js"></script>
            <script src="../assetsAdmin/plugins/jquery-mask-input/jquery.mask.min.js"></script>
            <script src="../assetsAdmin/plugins/select2/js/select2.min.js"></script>
            <script src="../assetsAdmin/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
            <script src="../assetsAdmin/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
            <script src="../assetsAdmin/plugins/daterangepicker/moment.min.js"></script>
            <script src="../assetsAdmin/plugins/daterangepicker/daterangepicker.js"></script>
            <script src="../assetsAdmin/plugins/jekyll-search.min.js"></script>
            <script src="../assetsAdmin/js/sleek.js"></script>
            <script src="../assetsAdmin/js/chart.js"></script>
            <script src="../assetsAdmin/js/date-range.js"></script>
            <script src="../assetsAdmin/js/map.js"></script>
            <script src="../assetsAdmin/js/custom.js"></script>



            <!-- SLEEK CSS -->
            <link id="sleek-css" rel="stylesheet" href="../assetsAdmin/css/sleek.css" />
            <!-- FAVICON -->
            <link href="../assetsAdmin/img/favicon.png" rel="shortcut icon" />
            <script src="../assetsAdmin/plugins/nprogress/nprogress.js"></script>
        </head>


        <<<<<<< HEAD <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
            <script>
                NProgress.configure({
                    showSpinner: false
                });
                NProgress.start();
            </script>


            =======

    <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
        <script>
            NProgress.configure({
                showSpinner: false
            });
            NProgress.start();
        </script>

        <div class="mobile-sticky-body-overlay"></div>
        >>>>>>> master

        <div class="wrapper">

            <aside class="left-sidebar bg-sidebar">
                <div id="sidebar" class="sidebar sidebar-with-footer">
                    <!-- Aplication Brand -->
                    <div class="app-brand">
                        <a href="/index.html">
                            <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                                <g fill="none" fill-rule="evenodd">
                                    <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                                </g>
                            </svg>
                            <span class="brand-name">Work'Up</span>
                        </a>
                    </div>
                    <!-- begin sidebar scrollbar -->
                    <div class="sidebar-scrollbar">

                        <!-- sidebar menu -->
                        <ul class="nav sidebar-inner" id="sidebar-menu">



                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                                    <i class="mdi mdi-view-dashboard-outline"></i>
                                    <span class="nav-text">Dashboard</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="dashboard" data-parent="#sidebar-menu">
                                    <div class="sub-menu">
                                        <li>
                                            <a class="sidenav-item-link" href="admin.php">
                                                <span class="nav-text">Accueil</span>

                                            </a>
                                        </li>
                                    </div>
                                </ul>
                            </li>


                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Services" aria-expanded="false" aria-controls="Services">
                                    <i class="mdi mdi-page-next-outline"></i>
                                    <span class="nav-text">Gerer Services</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="Services" data-parent="#sidebar-menu">
                                    <div class="sub-menu">
                                        <li>
                                            <a class="sidenav-item-link" href="afficher.php">
                                                <span class="nav-text">Afficher services</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sidenav-item-link" href="add.php">
                                                <span class="nav-text">Ajouter services</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="sidenav-item-link" href="modify.php">
                                                <span class="nav-text">Modifier services</span>
                                            </a>
                                        </li>

                                        <li>
                                            <a class="sidenav-item-link" href="delete.php">
                                                <span class="nav-text">Supprimer services</span>
                                            </a>
                                        </li>
                                    </div>
                                </ul>
                            </li>

                            <li class="has-sub active">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Reserva" aria-expanded="false" aria-controls="Services">
                                    <i class="mdi mdi-book-open-outline"></i>
                                    <span class="nav-text">Gerer Reservations</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="Reserva" data-parent="#sidebar-menu">
                                    <div class="sub-menu">
                                        <li>
                                            <a class="sidenav-item-link" href="../Reservation.php">
                                                <span class="nav-text">Afficher Reservations</span>
                                            </a>
                                        </li>
                                    </div>
                                </ul>
                            </li>




                            <li class="has-sub ">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                                    <i class="mdi mdi-folder-multiple-outline"></i>
                                    <span class="nav-text">UI Elements</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                                    <div class="sub-menu">


                                        <li class="has-sub">
                                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components" aria-expanded="false" aria-controls="components">
                                                <span class="nav-text">Components</span> <b class="caret"></b>
                                            </a>
                                            <ul class="collapse" id="components">
                                                <div class="sub-menu">

                                                    <li>
                                                        <a href="alert.html">Alert</a>
                                                    </li>


                                                </div>
                                            </ul>
                                        </li>

                                        <style>
                                            html {
                                                font-size: 100%;
                                            }
                                        </style>

                                        <li class="has-sub">
                                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons" aria-expanded="false" aria-controls="icons">
                                                <span class="nav-text">Icons</span> <b class="caret"></b>
                                            </a>
                                            <ul class="collapse" id="icons">
                                                <div class="sub-menu">

                                                    <li>
                                                        <a href="material-icon.html">Material Icon</a>
                                                    </li>

                                                    <li>
                                                        <a href="flag-icon.html">Flag Icon</a>
                                                    </li>

                                                </div>
                                            </ul>
                                        </li>




                                        <li class="has-sub">
                                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms" aria-expanded="false" aria-controls="forms">
                                                <span class="nav-text">Forms</span> <b class="caret"></b>
                                            </a>
                                            <ul class="collapse" id="forms">
                                                <div class="sub-menu">

                                                    <li>
                                                        <a href="basic-input.html">Basic Input</a>
                                                    </li>

                                                    <li>
                                                        <a href="input-group.html">Input Group</a>
                                                    </li>

                                                    <li>
                                                        <a href="checkbox-radio.html">Checkbox & Radio</a>
                                                    </li>

                                                    <li>
                                                        <a href="form-validation.html">Form Validation</a>
                                                    </li>

                                                    <li>
                                                        <a href="form-advance.html">Form Advance</a>
                                                    </li>

                                                </div>
                                            </ul>
                                        </li>




                                        <li class="has-sub">
                                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#maps" aria-expanded="false" aria-controls="maps">
                                                <span class="nav-text">Maps</span> <b class="caret"></b>
                                            </a>
                                            <ul class="collapse" id="maps">
                                                <div class="sub-menu">

                                                    <li>
                                                        <a href="google-map.html">Google Map</a>
                                                    </li>

                                                    <li>
                                                        <a href="vector-map.html">Vector Map</a>
                                                    </li>

                                                </div>
                                            </ul>
                                        </li>


                                        <script>
                                            swal("Welcome!", "Welcome admin!!", "success", {
                                                buttons: false,
                                                timer: 1729
                                            });
                                        </script>

                                        <li class="has-sub">
                                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#widgets" aria-expanded="false" aria-controls="widgets">
                                                <span class="nav-text">Widgets</span> <b class="caret"></b>
                                            </a>
                                            <ul class="collapse" id="widgets">
                                                <div class="sub-menu">

                                                    <li>
                                                        <a href="general-widget.html">General Widget</a>
                                                    </li>

                                                    <li>
                                                        <a href="chart-widget.html">Chart Widget</a>
                                                    </li>

                                                </div>
                                            </ul>
                                        </li>



                                    </div>
                                </ul>
                            </li>





                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts" aria-expanded="false" aria-controls="charts">
                                    <i class="mdi mdi-chart-pie"></i>
                                    <span class="nav-text">Charts</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="charts" data-parent="#sidebar-menu">
                                    <div class="sub-menu">



                                        <li>
                                            <a class="sidenav-item-link" href="chartjs.html">
                                                <span class="nav-text">ChartJS</span>

                                            </a>
                                        </li>




                                    </div>
                                </ul>
                            </li>





                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages">
                                    <i class="mdi mdi-image-filter-none"></i>
                                    <span class="nav-text">Pages</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="pages" data-parent="#sidebar-menu">
                                    <div class="sub-menu">



                                        <li>
                                            <a class="sidenav-item-link" href="user-profile.html">
                                                <span class="nav-text">User Profile</span>

                                            </a>
                                        </li>





                                        <li class="has-sub">
                                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication" aria-expanded="false" aria-controls="authentication">
                                                <span class="nav-text">Authentication</span> <b class="caret"></b>
                                            </a>
                                            <ul class="collapse" id="authentication">
                                                <div class="sub-menu">

                                                    <li>
                                                        <a href="sign-in.html">Sign In</a>
                                                    </li>

                                                    <li>
                                                        <a href="sign-up.html">Sign Up</a>
                                                    </li>

                                                </div>
                                            </ul>
                                        </li>




                                        <li class="has-sub">
                                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#others" aria-expanded="false" aria-controls="others">
                                                <span class="nav-text">Others</span> <b class="caret"></b>
                                            </a>
                                            <ul class="collapse" id="others">
                                                <div class="sub-menu">

                                                    <li>
                                                        <a href="invoice.html">invoice</a>
                                                    </li>

                                                    <li>
                                                        <a href="error.html">Error</a>
                                                    </li>

                                                </div>
                                            </ul>
                                        </li>



                                    </div>
                                </ul>
                            </li>





                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation" aria-expanded="false" aria-controls="documentation">
                                    <i class="mdi mdi-book-open-page-variant"></i>
                                    <span class="nav-text">Documentation</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="documentation" data-parent="#sidebar-menu">
                                    <div class="sub-menu">



                                        <li class="section-title">
                                            Getting Started
                                        </li>






                                        <li>
                                            <a class="sidenav-item-link" href="introduction.html">
                                                <span class="nav-text">Introduction</span>

                                            </a>
                                        </li>






                                        <li>
                                            <a class="sidenav-item-link" href="setup.html">
                                                <span class="nav-text">Setup</span>

                                            </a>
                                        </li>






                                        <li>
                                            <a class="sidenav-item-link" href="customization.html">
                                                <span class="nav-text">Customization</span>

                                            </a>
                                        </li>






                                        <li class="section-title">
                                            Layouts
                                        </li>





                                        <li class="has-sub">
                                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#headers" aria-expanded="false" aria-controls="headers">
                                                <span class="nav-text">Layout Headers</span> <b class="caret"></b>
                                            </a>
                                            <ul class="collapse" id="headers">
                                                <div class="sub-menu">

                                                    <li>
                                                        <a href="header-fixed.html">Header Fixed</a>
                                                    </li>

                                                    <li>
                                                        <a href="header-static.html">Header Static</a>
                                                    </li>

                                                    <li>
                                                        <a href="header-light.html">Header Light</a>
                                                    </li>

                                                    <li>
                                                        <a href="header-dark.html">Header Dark</a>
                                                    </li>

                                                </div>
                                            </ul>
                                        </li>




                                        <li class="has-sub">
                                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#sidebar-navs" aria-expanded="false" aria-controls="sidebar-navs">
                                                <span class="nav-text">layout Sidebars</span> <b class="caret"></b>
                                            </a>
                                            <ul class="collapse" id="sidebar-navs">
                                                <div class="sub-menu">

                                                    <li>
                                                        <a href="sidebar-open.html">Sidebar Open</a>
                                                    </li>

                                                    <li>
                                                        <a href="sidebar-minimized.html">Sidebar Minimized</a>
                                                    </li>

                                                    <li>
                                                        <a href="sidebar-offcanvas.html">Sidebar Offcanvas</a>
                                                    </li>

                                                    <li>
                                                        <a href="sidebar-with-footer.html">Sidebar With Footer</a>
                                                    </li>

                                                    <li>
                                                        <a href="sidebar-without-footer.html">Sidebar Without Footer</a>
                                                    </li>

                                                    <li>
                                                        <a href="right-sidebar.html">Right Sidebar</a>
                                                    </li>

                                                </div>
                                            </ul>
                                        </li>





                                        <li>
                                            <a class="sidenav-item-link" href="rtl.html">
                                                <span class="nav-text">RTL Direction</span>

                                            </a>
                                        </li>




                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>



            <div class="page-wrapper">
                <!-- Header -->
                <header class="main-header " id="header">
                    <nav class="navbar navbar-static-top navbar-expand-lg">
                        <!-- Sidebar toggle button -->
                        <button id="sidebar-toggler" class="sidebar-toggle">
                            <span class="sr-only">Toggle navigation</span>
                        </button>
                        <!-- search form -->
                        <div class="search-form d-none d-lg-inline-block">
                            <div class="input-group">
                                <button type="button" name="search" id="search-btn" class="btn btn-flat">
                                    <i class="mdi mdi-magnify"></i>
                                </button>
                                <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc." autofocus autocomplete="off" />
                            </div>
                            <div id="search-results-container">
                                <ul id="search-results"></ul>
                            </div>
                        </div>

                        <div class="navbar-right ">
                            <ul class="nav navbar-nav">
                                <!-- Github Link Button -->
                                <li class="github-link mr-3">
                                    <a class="btn btn-outline-secondary btn-sm" href="https://github.com/tafcoder/sleek-dashboard" target="_blank">
                                        <span class="d-none d-md-inline-block mr-2">Source Code</span>
                                        <i class="mdi mdi-github-circle"></i>
                                    </a>

                                </li>
                                <li class="dropdown notifications-menu">
                                    <button class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="mdi mdi-bell-outline"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-header">You have 5 notifications</li>
                                        <li>
                                            <a href="#">
                                                <i class="mdi mdi-account-plus"></i> New user registered
                                                <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="mdi mdi-account-remove"></i> User deleted
                                                <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                                                <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="mdi mdi-account-supervisor"></i> New client
                                                <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="mdi mdi-server-network-off"></i> Server overloaded
                                                <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-footer">
                                            <a class="text-center" href="#"> View All </a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- User Account -->
                                <li class="dropdown user-menu">
                                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                        <img src="../assetsAdmin/img/user/user.png" class="user-image" alt="User Image" />
                                        <span class="d-none d-lg-inline-block"><?php if (isset($_SESSION['name'])) echo $_SESSION['name']; ?></span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <!-- User image -->
                                        <li class="dropdown-header">
                                            <img src="../assetsAdmin/img/user/user.png" class="img-circle" alt="User Image" />
                                            <div class="d-inline-block">
                                                <?php if (isset($_SESSION['name'])) echo $_SESSION['name']; ?><small class="pt-1"><?php if (isset($_SESSION['email'])) echo $_SESSION['email']; ?></small>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="profile.html">
                                                <i class="mdi mdi-account"></i> My Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.html">
                                                <i class="mdi mdi-email"></i> Message
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                                        </li>

                                        <li class="dropdown-footer">
                                            <a href="logout.php"> <i class="mdi mdi-logout"></i> Log Out </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>


                </header>


                <div class="content-wrapper">
                    <div class="content">
                        <div class="breadcrumb-wrapper">
                            <h1>Services</h1>

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb p-0">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <span class="mdi mdi-home"></span>
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item" aria-current="page">Delete Services</li>
                                </ol>
                            </nav>

                        </div>


                        <!-- Recent Order Table -->
                        <?php
            include "../../core/serviceC.php";

            $service1C = new serviceC();
            $list = $service1C->afficherservices();

            ?>
            <div class="card card-table-border-none" id="promotion">
              <div class="card-header justify-content-between">
                <h2>Services</h2>
                <div class="date-range-report ">
                  <span></span>
                </div>
              </div>
              <div class="card-body pt-0 pb-5">
                <table id="myTable" class="table card-table table-responsive table-responsive-large table-hover table-sm" style="width:100%">
                  <thead>
                    <tr align="center">

                      <th align="center">Name of service</th>
                      <th align="center">ID of service</th>
                      <th align="center"></th>

                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if (is_array($list) || is_object($list)) {
                      foreach ($list as $row) {
                        ?>
                        <tr>
                          <td align="center"><?PHP echo $row['name']; ?></td>
                          <td align="center"><?PHP echo $row['id']; ?></td>

                          <form method="POST" action="deletes.php">
                            <td><button type="submit" name="delete" class="mb-1 btn btn-pill btn-danger" value="delete">Delete</button></td>
                            <input type="hidden" value="<?php echo $row['name']; ?>" name="name">
                          </form>

                        </tr>
                    <?php }
                    } ?>
                                    </tbody>
                                </table>
                                <style>
                                    .my-custom-scrollbar {
                                        position: relative;
                                        height: 500px;
                                        overflow: auto;
                                    }

                                    .table-wrapper-scroll-y {
                                        display: block;
                                    }


                                    #myTable.dataTable thead .sorting:after,
                                    #myTable.dataTable thead .sorting:before,
                                    #myTable.dataTable thead .sorting_asc:after,
                                    #myTable.dataTable thead .sorting_asc:before,
                                    #myTable.dataTable thead .sorting_asc_disabled:after,
                                    #myTable.dataTable thead .sorting_asc_disabled:before,
                                    #myTable.dataTable thead .sorting_desc:after,
                                    #myTable.dataTable thead .sorting_desc:before,
                                    #myTable.dataTable thead .sorting_desc_disabled:after,
                                    #myTable.dataTable thead .sorting_desc_disabled:before {
                                        bottom: .5em;
                                    }
                                </style>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </body>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "order": [
                    [1, "desc"]
                ],
                "dom": '<"top"i>rt<"bottom"flp><"clear">',
                "bLengthChange": false

            });
        });
    </script>

    </html>
