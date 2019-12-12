<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome Admin!</title>
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

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="../assetsAdmin/css/sleek.css" />
    <!-- FAVICON -->
    <link href="../assetsAdmin/img/favicon.png" rel="shortcut icon" />
    <script src="../assetsAdmin/plugins/nprogress/nprogress.js"></script>
</head>


<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>
 <style>
 html{
     font-size: 100%;
 }
 </style>
    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">

        <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
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
                        <span class="brand-name">Sleek Dashboard</span>
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
                                        <a class="sidenav-item-link" href="../admin.php">
                                            <span class="nav-text">Accueil</span>

                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>

                        <li class="has-sub active">
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

                        <li class="has-sub">
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
                        <li  class="has-sub" >
<a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#events"
aria-expanded="false" aria-controls="Services">
<i class="mdi mdi-book-open-outline"></i>
<span class="nav-text">Gerer Evenements</span> <b class="caret"></b>
</a>
<ul  class="collapse"  id="events"
data-parent="#sidebar-menu">
<div class="sub-menu">                        
<li >
  <a class="sidenav-item-link" href="../addeventadmin.php">
    <span class="nav-text">Afficher Evenements</span>
  </a>
</li>
<li >
  <a class="sidenav-item-link" href="../addeventadmin.html">
    <span class="nav-text">Ajouter Evenement</span>
  </a>
</li>
</div>
</ul>
</li>


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
                                    <span class="d-none d-lg-inline-block">Abdus Salam</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <!-- User image -->
                                    <li class="dropdown-header">
                                        <img src="../assetsAdmin/img/user/user.png" class="img-circle" alt="User Image" />
                                        <div class="d-inline-block">
                                            Abdus Salam <small class="pt-1">abdus@gmail.com</small>
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
                                        <a href="signin.html"> <i class="mdi mdi-logout"></i> Log Out </a>
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
                        <h1>Table of services</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb p-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <span class="mdi mdi-home"></span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    components
                                </li>
                                <li class="breadcrumb-item" aria-current="page">table</li>
                            </ol>
                        </nav>
                    </div>


                    <!-- Recent Order Table -->
                    <?php
                    include "../../core/serviceC.php";

                    $service1C = new serviceC();
                    $listeservices = $service1C->afficherservices();

                    ?>
                    <div class="card card-table-border-none" id="promotion">
                        <div class="card-header justify-content-between">
                            <div class="date-range-report ">
                                <span>
                                    <h1>Services</h1>
                                </span>
                            </div>
                        </div>
                        <div class="card-body pt-0 pb-5">
                            <table id="myTable" class="table card-table table-responsive table-responsive-large table-hover table-sm" style="width:100%">
                                <thead align="center">
                                    <tr>
                                        <th align="center">Service ID</th>
                                        <th align="center">Name of service</th>
                                        <th align="center">Image of service</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (is_array($listeservices) || is_object($listeservices)) {
                                        foreach ($listeservices as $row) {
                                            ?>
                                            <tr>
                                                <td align="center"><?PHP echo $row['id']; ?></td>
                                                <td align="center"><?PHP echo $row['name']; ?></td>
                                                <td align="center"><img src="images/<?PHP echo $row['image']; ?>" alt=""></td>
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