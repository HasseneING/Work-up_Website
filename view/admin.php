<?php session_start();



if($_SESSION['role']!='admin')
  header('location: loggedin.php');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Welcome <?php if(isset($_SESSION['name']))echo $_SESSION['name'];?>!</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="assetsAdmin/plugins/toaster/toastr.min.css" rel="stylesheet" />
  <link href="assetsAdmin/plugins/nprogress/nprogress.css" rel="stylesheet" />
  <link href="assetsAdmin/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
  <link href="assetsAdmin/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  <link href="assetsAdmin/plugins/ladda/ladda.min.css" rel="stylesheet" />
  <link href="assetsAdmin/plugins/select2/css/select2.min.css" rel="stylesheet" />
  <link href="assetsAdmin/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assetsAdmin/css/sleek.css" />

  

  <!-- FAVICON -->
  <link href="assetsAdmin/img/favicon.png" rel="shortcut icon" />

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assetsAdmin/plugins/nprogress/nprogress.js"></script>
</head>


  <body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>
                           <script>swal("Welcome!", "Welcome admin!!", "success", {
        buttons: false,
        timer: 1729
    }); </script>

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
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">Work'Up</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
<!-- begin sidebar scrollbar -->
<div class="sidebar-scrollbar">

<!-- sidebar menu -->
<ul class="nav sidebar-inner" id="sidebar-menu">
  

    <li  class="has-sub active" >
      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
        aria-expanded="false" aria-controls="dashboard">
        <i class="mdi mdi-view-dashboard-outline"></i>
        <span class="nav-text">Dashboard</span> <b class="caret"></b>
      </a>
      <ul  class="collapse"  id="dashboard"
        data-parent="#sidebar-menu">
        <div class="sub-menu">
              <li >
                <a class="sidenav-item-link" href="admin.php">
                  <span class="nav-text">Accueil</span>

                </a>
              </li>
        </div>
      </ul>
    </li>

    <li  class="has-sub" >
      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Services"
        aria-expanded="false" aria-controls="Services">
        <i class="mdi mdi-page-next-outline"></i>
        <span class="nav-text">Gerer Services</span> <b class="caret"></b>
      </a>
      <ul  class="collapse"  id="Services"
        data-parent="#sidebar-menu">
        <div class="sub-menu">                        
              <li >
                <a class="sidenav-item-link" href="services/add.php">
                  <span class="nav-text">Ajouter services</span>
                </a>
              </li>
                        
              <li >
                <a class="sidenav-item-link" href="services/modify.php">
                  <span class="nav-text">Modifier services</span>
                </a>
              </li>
              
              <li >
                <a class="sidenav-item-link" href="services/delete.php">
                  <span class="nav-text">Supprimer services</span>
                </a>
              </li>
        </div>
      </ul>
    </li>

    <li  class="has-sub" >
      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#Reserva"
        aria-expanded="false" aria-controls="Services">
        <i class="mdi mdi-book-open-outline"></i>
        <span class="nav-text">Gerer Reservations</span> <b class="caret"></b>
      </a>
      <ul  class="collapse"  id="Reserva"
        data-parent="#sidebar-menu">
        <div class="sub-menu">                        
              <li >
                <a class="sidenav-item-link" href="Reservation.php">
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
                <a class="sidenav-item-link" href="addeventadmin.php">
                  <span class="nav-text">Afficher Evenements</span>
                </a>
              </li>
              <li >
                <a class="sidenav-item-link" href="addeventadmin.html">
                  <span class="nav-text">Ajouter Evenements</span>
                </a>
              </li>
         </div>
      </ul>
    </li>
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
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  
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
                      <img src="assetsAdmin/img/user/user.png" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block"><?php if(isset($_SESSION['name']))echo $_SESSION['name'];?></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="assetsAdmin/img/user/user.png" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                        <?php if(isset($_SESSION['name']))echo $_SESSION['name'];?><small class="pt-1"><?php if(isset($_SESSION['email']))echo $_SESSION['email'];?></small>
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


					
						<div class="row">
							<div class="col-xl-6"> 
                  <!-- To Do list -->
                  <div class="card card-default todo-table" id="todo" data-scroll-height="550">
                    <div class="card-header justify-content-between">
                      <h2>To Do List</h2>
                      <a class="btn btn-primary btn-pill" id="add-task" href="#" role="button"> Add task </a>
                    </div>
                    <div class="card-body slim-scroll">
                      <div class="todo-single-item d-none" id="todo-input">
                        <form >
                          <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Todo" autofocus>
                          </div>
                        </form>
                      </div>
                      <div class="todo-list" id="todo-list">
                        <div class="todo-single-item d-flex flex-row justify-content-between finished">
                          <i class="mdi"></i>
                          <span >Finish Dashboard UI Kit update</span>
                          <span class="badge badge-primary">Finished</span>
                        </div>
                        <div class="todo-single-item d-flex flex-row justify-content-between current">
                          <i class="mdi"></i>
                          <span >Create new prototype for the landing page</span>
                          <span class="badge badge-primary">Today</span>
                        </div>
                        <div class="todo-single-item d-flex flex-row justify-content-between ">
                          <i class="mdi"></i>
                          <span > Add new Google Analytics code to all main files </span>
                          <span class="badge badge-danger">Yesterday</span>
                        </div>

                        <div class="todo-single-item d-flex flex-row justify-content-between ">
                          <i class="mdi"></i>
                          <span >Update parallax scroll on team page</span>
                          <span class="badge badge-success">Dec 15, 2018</span>
                        </div>

                        <div class="todo-single-item d-flex flex-row justify-content-between ">
                          <i class="mdi"></i>
                          <span >Update parallax scroll on team page</span>
                          <span class="badge badge-success">Dec 15, 2018</span>
                        </div>
                        <div class="todo-single-item d-flex flex-row justify-content-between ">
                          <i class="mdi"></i>
                          <span >Create online customer list book</span>
                          <span class="badge badge-success">Dec 15, 2018</span>
                        </div>
                        <div class="todo-single-item d-flex flex-row justify-content-between ">
                          <i class="mdi"></i>
                          <span >Lorem ipsum dolor sit amet, consectetur.</span>
                          <span class="badge badge-success">Dec 15, 2018</span>
                        </div>

                        <div class="todo-single-item d-flex flex-row justify-content-between mb-1">
                          <i class="mdi"></i>
                          <span >Update parallax scroll on team page</span>
                          <span class="badge badge-success">Dec 15, 2018</span>
                        </div>
                      </div>
                    </div>
                    <div class="mt-3"></div>
                  </div>
</div>
							<div class="col-xl-6">
                  <!-- area chart -->
                  <div class="card card-default" >
                    <div class="card-header d-block d-md-flex justify-content-between">
                      <h2>World Wide Customer </h2>
                      <div class="dropdown show d-inline-block widget-dropdown ml-auto">
                        <a class="dropdown-toggle" href="#" role="button" id="world-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                          World Wide
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="world-dropdown">
                          <li class="dropdown-item"><a href="#">Continetal chart</a></li>
                          <li class="dropdown-item"><a href="#">Sub-continental</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="card-body vector-map-world">
                      <div id="world" style="height: 100%; width: 100%;"></div>
                    </div>
                    <div class="card-footer d-flex flex-wrap bg-white p-0">
                      <div class="col-6">
                        <div class="p-4">
                          <ul class="d-flex flex-column justify-content-between">
                            <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #29cc97"></i>America <span class="float-right">5k</span></li>
                            <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #4c84ff "></i>Australia <span class="float-right">3k</span></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="p-4 border-left">
                          <ul class="d-flex flex-column justify-content-between">
                            <li class="mb-2"><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #ffa128"></i>Europe <span class="float-right">4k</span></li>
                            <li><i class="mdi mdi-checkbox-blank-circle-outline mr-2" style="color: #fe5461"></i>Africa <span class="float-right">2k</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
</div>
						</div>

						<div class="row">
							<div class="col-xl-5">
                  <!-- New Customers -->
                  <div class="card card-table-border-none"  data-scroll-height="580">
                    <div class="card-header justify-content-between ">
                      <h2>New Customers</h2>
                      <div>
                          <button class="text-black-50 mr-2 font-size-20">
                            <i class="mdi mdi-cached"></i>
                          </button>
                          <div class="dropdown show d-inline-block widget-dropdown">
                              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-customar"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                              </a>
                              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-customar">
                                <li class="dropdown-item"><a  href="#">Action</a></li>
                                <li class="dropdown-item"><a  href="#">Another action</a></li>
                                <li class="dropdown-item"><a  href="#">Something else here</a></li>
                              </ul>
                            </div>
                      </div>
                    </div>
                    <div class="card-body pt-0">
                      <table class="table ">
                        <tbody>
                          <tr>
                            <td >
                              <div class="media">
                                <div class="media-image mr-3 rounded-circle">
                                  <a href="profile.html"><img class="rounded-circle w-45" src="assetsAdmin/img/user/u1.jpg" alt="customer image"></a>
                                </div>
                                <div class="media-body align-self-center">
                                  <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Selena Wagner</h6></a>
                                  <small>@selena.oi</small>
                                </div>
                              </div>
                            </td>
                            <td >2 Orders</td>
                            <td class="text-dark d-none d-md-block">$150</td>
                          </tr>
                          <tr>
                            <td >
                              <div class="media">
                                <div class="media-image mr-3 rounded-circle">
                                  <a href="profile.html"><img class="rounded-circle w-45" src="assetsAdmin/img/user/u2.jpg" alt="customer image"></a>
                                </div>
                                <div class="media-body align-self-center">
                                  <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Walter Reuter</h6></a>
                                  <small>@walter.me</small>
                                </div>
                              </div>
                            </td>
                            <td >5 Orders</td>
                            <td class="text-dark d-none d-md-block">$200</td>
                          </tr>
                          <tr>
                            <td >
                              <div class="media">
                                <div class="media-image mr-3 rounded-circle">
                                  <a href="profile.html"><img class="rounded-circle w-45" src="assetsAdmin/img/user/u3.jpg" alt="customer image"></a>
                                </div>
                                <div class="media-body align-self-center">
                                  <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Larissa Gebhardt</h6></a>
                                  <small>@larissa.gb</small>
                                </div>
                              </div>
                            </td>
                            <td >1 Order</td>
                            <td class="text-dark d-none d-md-block">$50</td>
                          </tr>
                          <tr>
                            <td >
                              <div class="media">
                                <div class="media-image mr-3 rounded-circle">
                                  <a href="profile.html"><img class="rounded-circle w-45" src="assetsAdmin/img/user/u4.jpg" alt="customer image"></a>
                                </div>
                                <div class="media-body align-self-center">
                                  <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Albrecht Straub</h6></a>
                                  <small>@albrech.as</small>
                                </div>
                              </div>
                            </td>
                            <td >2 Orders</td>
                            <td class="text-dark d-none d-md-block">$100</td>
                          </tr>
                          <tr>
                            <td >
                              <div class="media">
                                <div class="media-image mr-3 rounded-circle">
                                  <a href="profile.html"><img class="rounded-circle w-45" src="assetsAdmin/img/user/u5.jpg" alt="customer image"></a>
                                </div>
                                <div class="media-body align-self-center">
                                  <a href="profile.html"><h6 class="mt-0 text-dark font-weight-medium">Leopold Ebert</h6></a>
                                  <small>@leopold.et</small>
                                </div>
                              </div>
                            </td>
                            <td >1 Order</td>
                            <td class="text-dark d-none d-md-block">$60</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
</div>
							<div class="col-xl-7">
                  <!-- Top Products -->
                  <div class="card card-default" data-scroll-height="580">
                    <div class="card-header justify-content-between mb-4">
                      <h2>Top Products</h2>
                      <div>
                          <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                          <div class="dropdown show d-inline-block widget-dropdown">
                              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-product" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                              </a>
                              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-product">
                                <li class="dropdown-item"><a  href="#">Update Data</a></li>
                                <li class="dropdown-item"><a  href="#">Detailed Log</a></li>
                                <li class="dropdown-item"><a  href="#">Statistics</a></li>
                                <li class="dropdown-item"><a  href="#">Clear Data</a></li>
                              </ul>
                            </div>
                      </div>

                    </div>
                    <div class="card-body py-0">
                      <div class="media d-flex mb-5">
                        <div class="media-image align-self-center mr-3 rounded">
                          <a href="#"><img src="assetsAdmin/img/products/p1.jpg" alt="customer image"></a>
                        </div>
                        <div class="media-body align-self-center">
                          <a href="#"><h6 class="mb-3 text-dark font-weight-medium"> Coach Swagger</h6></a>
                          <p class="float-md-right"><span class="text-dark mr-2">20</span>Sales</p>
                          <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                          <p class="mb-0">
                            <del>$300</del>
                            <span class="text-dark ml-3">$250</span>
                          </p>
                        </div>
                      </div>

                      <div class="media d-flex mb-5">
                        <div class="media-image align-self-center mr-3 rounded">
                          <a href="#"><img src="assetsAdmin/img/products/p2.jpg" alt="customer image"></a>
                        </div>
                        <div class="media-body align-self-center">
                          <a href="#"><h6 class="mb-3 text-dark font-weight-medium"> Coach Swagger</h6></a>
                          <p class="float-md-right"><span class="text-dark mr-2">20</span>Sales</p>
                          <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                          <p class="mb-0">
                            <del>$300</del>
                            <span class="text-dark ml-3">$250</span>
                          </p>
                        </div>
                      </div>

                      <div class="media d-flex mb-5">
                        <div class="media-image align-self-center mr-3 rounded">
                          <a href="#"><img src="assetsAdmin/img/products/p3.jpg" alt="customer image"></a>
                        </div>
                        <div class="media-body align-self-center">
                          <a href="#"><h6 class="mb-3 text-dark font-weight-medium"> Gucci Watch</h6></a>
                          <p class="float-md-right"><span class="text-dark mr-2">10</span>Sales</p>
                          <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                          <p class="mb-0">
                            <del>$300</del>
                            <span class="text-dark ml-3">$50</span>
                          </p>
                        </div>
                      </div>
                      </div>
                  </div>
</div>
						</div>
</div>

          


        </div>

                  <footer class="footer mt-auto">
            <div class="copyright bg-white">
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

      </div>
    </div>

    
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="assetsAdmin/plugins/jquery/jquery.min.js"></script>
<script src="assetsAdmin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assetsAdmin/plugins/toaster/toastr.min.js"></script>
<script src="assetsAdmin/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assetsAdmin/plugins/charts/Chart.min.js"></script>
<script src="assetsAdmin/plugins/ladda/spin.min.js"></script>
<script src="assetsAdmin/plugins/ladda/ladda.min.js"></script>
<script src="assetsAdmin/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="assetsAdmin/plugins/select2/js/select2.min.js"></script>
<script src="assetsAdmin/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assetsAdmin/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="assetsAdmin/plugins/daterangepicker/moment.min.js"></script>
<script src="assetsAdmin/plugins/daterangepicker/daterangepicker.js"></script>
<script src="assetsAdmin/plugins/jekyll-search.min.js"></script>
<script src="assetsAdmin/js/sleek.js"></script>
<script src="assetsAdmin/js/chart.js"></script>
<script src="assetsAdmin/js/date-range.js"></script>
<script src="assetsAdmin/js/map.js"></script>
<script src="assetsAdmin/js/custom.js"></script>




  </body>
</html>
