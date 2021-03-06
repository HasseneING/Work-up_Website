<?php session_start(); ?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Work'Up</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.ico">

    <!--Google Font link-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/iconfont.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootsnav.css">

    <link rel="stylesheet" href="jquery.datetimepicker.min.css">
    <script src="jquery.js"></script>
    <script src="jquery.datetimepicker.full.js"></script>


    <link rel="canonical" href="https://www.creative-tim.com/product/hipster-as-f-cards"/>

    <!-- Stylesheet      -->
    <link href="CardAssets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="CardAssets/css/hipster_cards.css" rel="stylesheet"/>
   

    <!--     Fonts and icons     -->
    <link href="CardAssets/css/pe-icon-7-stroke.css" rel="stylesheet" />




    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--For Plugins external css-->
    <link rel="stylesheet" href="assets/css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>


</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="100">

    <script>
        window.onbeforeunload = function() {
            window.scrollTo(0, 0);
        }
    </script>


    <!-- Preloader -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_four"></div>
            </div>
        </div>
    </div>
    <!--End off Preloader -->


    <div class="culmn">
        <!--Home page style-->


        <nav class="navbar navbar-default bootsnav navbar-fixed no-background white">

            <!-- Start Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>
            <!-- End Top Search -->


            <div class="container">
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#brand">
                        <img src="assets/images/logo.png" class="logo" alt="" height="50" width="150">
                        <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                    </a>

                </div>
                <!-- End Header Navigation -->

                <!-- navbar menu -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#features">About</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#portfolio">Visit</a></li>
                        <li><a href="#test">Testimonial</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>

        </nav>

        <!--Home Sections-->
        <!--  <iframe width="560" height="315" src="https://www.youtube.com/embed/UObVUaGH9zc?rel=0&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="display: none;"></iframe>-->
        <section id="home" class="home bg-black fix">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="main_home text-center">
                        <div class="col-md-12">
                            <div class="hello">
                                <div class="slid_item">
                                    <div class="home_text ">
                                        <h1 class="text-yellow">Welcome to </h1>
                                        <h1 class="text-blue">Work</h1>
                                        <h1 class="text-yellow">'Up</h1>
                                        <h3 class="text-white text-uppercase">The First Costudying Space in Tunisia</h3>
                                    </div>
                                </div>
                                <!-- End off slid item -->

                            </div>
                        </div>

                    </div>


                    <a class="mouse-scroll" href="#about">
                        <span class="mouse">
                            <span class="mouse-movement"></span>
                        </span>
                        <span class="mouse-message fadeIn">Explore</span> <br />
                        <!--<i class="fa fa-angle-down m-top-10 fadeIn mouse-message"></i>-->
                    </a>

                </div>
                <!--End off row-->
            </div>
            <!--End off container -->
        </section>
        <!--End off Home Sections-->

        <script>
            function on() {
                document.getElementById("overlay").style.display = "block";
            }

            function off() {
                document.getElementById("overlay").style.display = "none";
            }

            function on2() {
                document.getElementById("overlay2").style.display = "block";
            }

            function off2() {
                document.getElementById("overlay2").style.display = "none";
            }
        </script>

        <!--About Section-->
        <section id="about" class="about bg-yellow roomy-80">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_about text-center">
                            <h1 class="text-blue">Work'Up is a the coziest Costudying space you'll find around </h1>
                            <h2 class="text-white">- & -</h2>
                            <h3 class="text-blue text-uppercase">Book your study session! and get to work!</h3>

                            <a onclick="on();" class="btn btn-primary m-top-100">Book Now!</a>
                            <a onclick="on2();" class="btn btn-primary m-top-100">See Bookings!</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="vbook">
            <div id="overlay2" onclick="off2();">

                <?php
                include "../core/reservationC.php";
                $reservation1C = new reservationC();
                $listeReservations = $reservation1C->afficherReservationID($_SESSION['id']);

                ?>
                <div style="background:white; padding-top:50px;" class="card card-table-border-none" id="promotion">
                    <div class="card-header justify-content-between">
                        <h2 style="padding-top:50px;margin-left: 344px;">Reservations</h2>
                        <div class="date-range-report ">
                            <span></span>
                        </div>
                    </div>
                    <div class="card-body pt-0 pb-5">
                        <table class="table card-table table-responsive table-responsive-large" style="width:50%;margin-left: 344px;">
                            <thead>
                                <tr>
                                    <th class="d-none d-md-table-cell">date Reservation</th>
                                    <th>places</th>
                                    <th>Numero Telephone</th>
                                    <th>Notes</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (is_array($listeReservations) || is_object($listeReservations)) {
                                    foreach ($listeReservations as $row) {
                                        ?>
                                        <tr>
                                        <tr>
                                            <td><a class="text-dark" href=""><?PHP echo $row['date_reservation']; ?></a> </td>
                                            <td class="d-none d-md-table-cell"><?PHP echo $row['seats']; ?></td>
                                            <td class="d-none d-md-table-cell"><?PHP echo $row['phone']; ?></td>
                                            <td class="d-none d-md-table-cell"><a>Afficher</a></td>
                                            <td class="d-none d-md-table-cell"><?PHP echo $row['status']; ?></td>
                                        </tr>
                                <?php }
                                } ?>



                                </tr>
                            </tbody>
                        </table>
                    </div>
        </section>



        <section id="book">
            <div id="overlay">
                <form id="fourma" action="booking.php" method="POST">
                    <label class="text-white">Pick a time:</label>
                    <br>
                    <input id="datetime" autocomplete="off" placeholder="Click here!" class="text-blue" type="text" name="date">
                    <script>
                        $("#datetime").datetimepicker();
                    </script>
                    <br>
                    <label class="text-white">Number of seats:</label>
                    <br>
                    <select class="text-blue" type="number" id="seats" name="seats">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                    <br>

                    <label class="text-white">Phone Number:</label>
                    <br>
                    <input placeholder="optional" class="text-blue" id="phone" name="phone">
                    <br>
                    <label class="text-white">Additional Notes:</label>
                    <br>
                    <input autocomplete="off" placeholder="Requests?" class="text-blue" type="text" name="notes">
                    <br>
                    <br>
                    <button id="Btn-A" onclick="validation()" type="button" class="text-blue">Go!</button>
                    <button onclick="off()" type="button" class="text-blue">Cancel</button>
                </form>
            </div>
        </section>

        <script type="text/javascript">
            function validation() {
                var time = document.getElementById('datetime').value;
                var phone = document.getElementById('phone').value;
                if (time.length == 0) {
                    swal("Time Field Empty!", "Pick a time!", "error", {
                        buttons: false,
                        timer: 1729
                    });
                } else if ((phone.length > 8) || (phone.length < 8) && (phone.length != 0)) {
                    swal("Check your phone number!", "Wrong number!", "error", {
                        buttons: false,
                        timer: 1729
                    });
                } else document.getElementById('fourma').submit();
            }
        </script>


        <!--Featured Section-->
        <section id="features" class="features bg-white">
            <div class="container">
                <div class="row">
                    <div class="main_features fix roomy-70">

                        <div class="col-md-5">
                            <div class="features_item">
                                <div class="head_title">
                                    <h2 class="text-uppercase">Our <strong>Concept</strong></h2>
                                </div>
                                <div class="featured_content">
                                    <p>Work'up is a costudying space not like any other Coworking space. Here you'll fine a nice community of Students like you doing their best work. You'll also find it to be the nicest/coziest place to study in.</p>

                                    <a href="" class="btn btn-default m-top-40">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-md-offset-1 sm-m-top-50">
                            <div class="features_item2_area">
                                <div class="features_item2 text-center">
                                    <!-- <div class="divider_horizontal"></div>
                                    <div class="divider_vertical"></div>-->
                                    <div class="col-xs-6">
                                        <div class="features_item_text">
                                            <img src="assets/images/FT1.jpg" alt="" />
                                            <!-- <p class="m-top-20">Trending Design</p>-->
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="features_item_text">
                                            <img src="assets/images/FT2.jpg" alt="" class="img-circle" />
                                            <p class="m-top-20">Book Your Seats</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="features_item_text m-top-50">
                                            <img src="assets/images/FT3.jpg" alt="" class="img-circle" />
                                            <p class="m-top-20">Be Inspired To Innovate</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="features_item_text m-top-50">
                                            <img src="assets/images/FT4.jpg" alt="" class="img-circle" />
                                            <p class="m-top-20">Work'up Coworking Space</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End off row -->
            </div>
            <!-- End off container -->
        </section>
        <!-- End off Featured Section-->


        <!--Business Section-->
        <?php

        $service1C = new serviceC();
        $list = $service1C->afficherservices();

        ?>
        <section id="service" class="service bg-grey roomy-70">
            <div class="container">
                <div class="row">

                    <div class="main_service">
                        <div class="col-md-6">
                            <div class="service_slid">
                                <div class="slid_shap bg-yellow"></div>
                                <div class="service_slid_item text-center">
                                    <?php
                                    if (is_array($list) || is_object($list)) {
                                        foreach ($list as $row) { ?>
                                            <div class="service_slid_text">
                                                <!--<span class="icon icon icon-tools text-black"></span>-->
                                                <table align="center">
                                                    <tr align="center">
                                                        <td align="center"><img src="services/images/<?PHP echo $row['image']; ?>" class="svg" /></td>
                                                    </tr>
                                                    <tr align="center">
                                                        <td align="center">
                                                            <h5 class="text-black m-top-20"><?PHP echo $row['name']; ?></h5>
                                                        </td>
                                                    </tr>
                                                </table>

                                            </div>
                                    <?php }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-5 col-md-offset-1">
                        <div class="service_item sm-m-top-50">
                            <div class="head_title">
                                <h2 class="text-uppercase">Our <strong>Service</strong></h2>
                            </div>
                            <div class="service_content">
                                <p>Either you visit us for only one hour or for the whole day, you will beneficiate from all the following services .</p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!-- End off Business section -->


    <!--Team And Skill Section-->
    <section id="teams" class="teams roomy-80">
        <div class="container">
            <div class="row">
                <div class="main_teams_content fix">
                    <div class="col-md-6">
                        <div class="teams_item">
                            <div class="head_title">
                                <h2 class="text-uppercase">Our <strong>Best Team</strong></h2>
                            </div>
                            <p>In work'up you'll be welcomed by Shiheb,Yassine or Soulayma! or anyone there really Get comfortable and get to work!</p>


                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="teams_item text-center sm-m-top-50">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="assets/images/T1.jpg" alt="" class="img-circle" />
                                    <h4 class="m-top-20">Shiheb <strong>NJ</strong></h4>
                                    <h5>Lead Designer</h5>
                                    <div class="separator"></div>
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                                <!-- End off col-md-4 -->
                                <div class="col-sm-4">
                                    <img src="assets/images/T3.jpg" alt="" class="img-circle" />
                                    <h4 class="m-top-20">Yassine <strong>Smith</strong></h4>
                                    <h5>UX Designer</h5>
                                    <div class="separator"></div>
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                                <!-- End off col-md-4 -->
                                <div class="col-sm-4">
                                    <img src="assets/images/T2.jpg" alt="" class="img-circle" />
                                    <h4 class="m-top-20">Soulayma <strong>Ayed</strong></h4>
                                    <h5>Web Engineer</h5>
                                    <div class="separator"></div>
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                                <!-- End off col-md-4 -->
                                <div class="col-sm-4">
                                    <img src="assets/images/T4.jpg" alt="" class="img-circle" />
                                    <h4 class="m-top-20">Feres <strong>Nefzi</strong></h4>
                                    <h5>Member</h5>
                                    <div class="separator"></div>
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End off col-md-6 -->
                </div>
                <!-- End off main Team -->

            </div>
            <!-- End col-md-12 -->
        </div>
        <!-- End off row -->
        </div>
        <!-- End off container -->
    </section>
    <!-- End off Team & Skill section -->


    <!--Choose section-->
    <section id="choose" class="choose bg-grey roomy-80">
        <div class="container">
            <div class="row">
                <div class="main_choose">
                    <div class="col-md-6">

                    </div>
                </div>
                <!-- End off col-md-6 -->

                <div class="col-md-5 col-md-offset-1">
                    <div class="choose_content sm-m-top-40">
                        <div class="head_title">
                            <h2 class="text-uppercase">Why <strong>Choose Us</strong></h2>
                        </div>
                        <div class="choose_item_text fix">

                            <h6><i class="fa fa-check-square-o"></i>>Calm Space for Revisions</h6>
                            <p> Whether you need a desk, workspace, or desk space, we create work environments that increase productivity, promote innovation, and encourage collaboration</p>
                        </div>
                        <div class="choose_item_text fix m-top-20">
                            <h6><i class="fa fa-check-square-o"></i> Doing Meetings</h6>
                            <p>With work'up do the meeting with your colleagues, friends </p>
                        </div>
                        <div class="choose_item_text fix m-top-20">
                            <h6><i class="fa fa-check-square-o"></i>Bringing Your Food </h6>
                            <p>It's good revise around a good soluble flavored coffee</p>
                        </div>
                        <!--<div class="choose_item_text fix m-top-20">
                                    <h6><i class="fa fa-check-square-o"></i> All in psd files.</h6>
                                    <p>Atque ducimus velit, earum quidem, iusto dolorem. </p>
                                </div>-->
                    </div>
                </div>
                <!-- End off col-md-6 -->
            </div>
        </div>
        <!-- End off row -->
        </div>
        <!-- End off container -->
    </section>
    <!-- End off choose section -->


    <!--Portfolio Section-->



    <section id="portfolio" class="portfolio margin-top-120">

        <!-- Portfolio container-->
        <div class="container">
            <div class="row">
                <div class="main-portfolio roomy-80">

                    <div class="col-md-4">
                        <div class="head_title text-left sm-text-center wow fadeInDown">
                            <h2>Our <strong>Gallery</strong></h2>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="filters-button-group text-right sm-text-center">

                        </div>
                    </div>



                    <div style="clear: both;"></div>

                    <div class="grid text-center">

                        <div class="grid-item transition metal ium">
                            <img alt="" src="assets/images/PF-1.jpg">
                            <div class="grid_hover_area text-center">
                                <div class="girid_hover_text m-top-110">
                                    <h4 class="text-white"></h4>
                                    <p class="text-white"></p>
                                    <a href="assets/images/PF-1.jpg" class="btn btn-primary popup-img">View Image</a>
                                </div>
                            </div>
                            <!-- End off grid Hover area -->
                        </div>
                        <!-- End off grid item -->

                        <div class="grid-item metalloid ">
                            <img alt="" src="assets/images/PF-2.jpg">
                            <div class="grid_hover_area text-center">
                                <div class="girid_hover_text m-top-180">
                                    <h4 class="text-white"></h4>
                                    <p class="text-white"></p>
                                    <a href="assets/images/PF-2.jpg" class="btn btn-primary popup-img">View Image</a>
                                </div>
                            </div>
                            <!-- End off grid Hover area -->
                        </div>
                        <!-- End off grid item -->

                        <div class="grid-item post-transition metal numberGreaterThan50">
                            <img alt="" src="assets/images/PF-3.jpg">
                            <div class="grid_hover_area text-center">
                                <div class="girid_hover_text m-top-50">
                                    <h4 class="text-white"></h4>
                                    <p class="text-white"></p>
                                    <a href="assets/images/PF-3.jpg" class="btn btn-primary popup-img">View Image</a>
                                </div>
                            </div>
                            <!-- End off grid Hover area -->
                        </div>
                        <!-- End off grid item -->

                        <div class="grid-item post-transition metal ium">
                            <img alt="" src="assets/images/PF-4.jpg">
                            <div class="grid_hover_area text-center">
                                <div class="girid_hover_text m-top-180">
                                    <h4 class="text-white"></h4>
                                    <p class="text-white"></p>
                                    <a href="assets/images/PF-4.jpg" class="btn btn-primary popup-img">View Image</a>
                                </div>
                            </div>
                            <!-- End off grid Hover area -->
                        </div>
                        <!-- End off grid item -->

                        <div class="grid-item metal ar">
                            <img alt="" src="assets/images/PF-5.jpg">
                            <div class="grid_hover_area text-center">
                                <div class="girid_hover_text m-top-110">
                                    <h4 class="text-white"></h4>
                                    <p class="text-white"></p>
                                    <a href="assets/images/PF-5.jpg" class="btn btn-primary popup-img">View Image</a>
                                </div>
                            </div>
                            <!-- End off grid Hover area -->
                        </div>
                        <!-- End off grid item -->

                        <div class="grid-item alkali ar">
                            <img alt="" src="assets/images/PF-6.jpg">
                            <div class="grid_hover_area text-center">
                                <div class="girid_hover_text m-top-50">
                                    <h4 class="text-white"></h4>
                                    <p class="text-white"></p>
                                    <a href="assets/images/PF-6.jpg" class="btn btn-primary popup-img">View Image</a>
                                </div>
                            </div>
                            <!-- End off grid Hover area -->
                        </div>
                        <!-- End off grid item -->

                    </div>



                    <div style="clear: both;"></div>


                </div>
            </div>
        </div>
        <!-- Portfolio container end -->
    </section>
    <!-- End off portfolio section -->



    <!--Test section-->
    <section id="test" class="test bg-grey roomy-60 fix">
        <div class="container">
            <div class="row">
                <!-- <div class="main_test fix">
                        <div class="col-md-6">
                            <div class="cbrand text-center">
                                <div class="divider_horizontal"></div>
                                <div class="divider_vertical"></div>
                                <div class="col-xs-6">
                                    <div class="cbrand_item">
                                        <img src="assets/images/cbrand-1.png" alt="" />
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="cbrand_item">
                                        <img src="assets/images/cbrand-2.png" alt="" />
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="cbrand_item m-top-40">
                                        <img src="assets/images/cbrand-3.png" alt="" />
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="cbrand_item m-top-40">
                                        <img src="assets/images/cbrand-4.png" alt="" />
                                    </div>
                                </div>

                            </div>
                        </div>-->

                <div class="col-md-6 sm-m-top-40">
                    <div class="test_item1 fix ">
                        <div class="head_title fix">
                            <h2 class="text-uppercase">What <strong>Clients Say</strong></h2>
                        </div>
                        <div class="item_img">
                            <img class="img-circle" src="assets/images/test-im1.jpg" alt="" />
                            <i class="fa fa-quote-left"></i>
                        </div>

                        <div class="item_text">
                            <h5>Sarah Smith</h5>
                            <p>Original concept, beautiful space and warm welcome! It feels like home.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- End off test section -->



    <footer id="contact" class="footer action-lage bg-black p-top-80">
        <!--<div class="action-lage"></div>-->
        <div class="container">
            <div class="row">
                <div class="widget_area">
                    <div class="col-md-3">
                        <div class="widget_item widget_about">
                            <h5 class="text-white">About Us</h5>
                            <p class="m-top-30">Work'up is a new Costudying space we started with a very minimalistic budget to create this amazing space where people would want to study. </p>
                            <div class="widget_ab_item m-top-30">
                                <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                                <div class="widget_ab_item_text">
                                    <h6 class="text-white">Location</h6>
                                    <p>

                                        Avenue 14 janvier route X 6 Le bardo Immeuble SLM el KATEB (3.16 mi) Bardo, Aryanah, Tunisia 2042
                                    </p>
                                </div>
                            </div>
                            <div class="widget_ab_item m-top-30">
                                <div class="item_icon"><i class="fa fa-phone"></i></div>
                                <div class="widget_ab_item_text">
                                    <h6 class="text-white">Phone :</h6>
                                    <p>+216 53 284 282</p>
                                </div>
                            </div>
                            <div class="widget_ab_item m-top-30">
                                <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                <div class="widget_ab_item_text">
                                    <h6 class="text-white">Email Address :</h6>
                                    <p>workup.co-studying.space@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <!-- End off widget item -->
                    </div>
                    <!-- End off col-md-3 -->

                    <div class="col-md-3">
                        <div class="widget_item widget_latest sm-m-top-50">
                            <h5 class="text-white">Latest News</h5>
                            <div class="widget_latst_item m-top-30">
                                <div class="item_icon"><img src="assets/images/ltst-im-1.jpg" alt="" /></div>
                                <div class="widget_latst_item_text">
                                    <p>NEED to review in a quiet and pleasant place a space for revision</p>
                                    <a href="">21<sup>th</sup> August 2019</a>
                                </div>
                            </div>
                            <div class="widget_latst_item m-top-30">
                                <div class="item_icon"><img src="assets/images/ltst-im-2.jpg" alt="" /></div>
                                <div class="widget_latst_item_text">
                                    <p>Work'Up Is Here Open Up</p>
                                    <a href="">21<sup>th</sup> July 2019</a>
                                </div>
                            </div>
                            <div class="widget_latst_item m-top-30">
                                <div class="item_icon"><img src="assets/images/ltst-im-3.jpg" alt="" /></div>
                                <div class="widget_latst_item_text">
                                    <p>At Work'up the atmosphere is easy</p>
                                    <a href="">19<sup>th</sup> November 2019</a>
                                </div>
                            </div>
                        </div>
                        <!-- End off widget item -->
                    </div>
                    <!-- End off col-md-3 -->

                    <div class="col-md-3">
                        <div class="widget_item widget_service sm-m-top-50">
                            <h5 class="text-white">Latest News</h5>
                            <ul class="m-top-20">
                                <li class="m-top-20"> <a href="#"><i class="fa fa-angle-right"></i> Web Design</a></li>
                                <li class="m-top-20"> <a href="#"><i class="fa fa-angle-right"></i> User Interface Design</a></li>
                                <li class="m-top-20"> <a href="#"><i class="fa fa-angle-right"></i> Web Hosting</a></li>
                                <li class="m-top-20"> <a href="#"><i class="fa fa-angle-right"></i> Themes</a></li>
                                <li class="m-top-20"> <a href="#"><i class="fa fa-angle-right"></i> Support Forums</a></li>
                            </ul>

                        </div>
                        <!-- End off widget item -->
                    </div>
                    <!-- End off col-md-3 -->

                    <div class="col-md-3">
                        <div class="widget_item widget_newsletter sm-m-top-50">
                            <h5 class="text-white">Newsletter</h5>
                            <form class="form-inline m-top-30">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Enter you Email">
                                    <button type="submit" class="btn text-center"><i class="fa fa-arrow-right"></i></button>
                                </div>

                            </form>
                            <div class="widget_brand m-top-40">
                                <a href="" class="text-uppercase">Your Logo</a>
                                <p>A co-studying space that adapts to you ! Go beyond the simple creation of beautiful shared workspaces</p>
                            </div>
                            <ul class="list-inline m-top-20">
                                <li>- <a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                <li><a href=""><i class="fa fa-behance"></i></a></li>
                                <li><a href=""><i class="fa fa-dribbble"></i></a> - </li>
                            </ul>

                        </div>
                        <!-- End off widget item -->
                    </div>
                    <!-- End off col-md-3 -->
                </div>
            </div>
        </div>
        <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
            <div class="col-md-12">
                <p class="wow fadeInRight" data-wow-duration="1s">
                    Made with
                    <i class="fa fa-heart"></i> by
                    <a target="_blank" href="http://bootstrapthemes.co">Bootstrap Themes</a> 2019. All Rights Reserved
                </p>
            </div>
        </div>
    </footer>




    </div>

    <!-- JS includes -->

    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.js"></script>
    <!--<script src="assets/js/jquery.easypiechart.min.js"></script>-->
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <!--<script src="assets/js/slick.js"></script>-->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/js.isotope.js"></script>
    <script src="assets/js/jquery.collapse.js"></script>
    <script src="assets/js/bootsnav.js"></script>

    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>



</body>

</html>