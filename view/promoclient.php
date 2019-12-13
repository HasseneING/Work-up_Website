<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>promo</title>
    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
     
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="login.css">
    <script src="admin1.js"></script>

</head>

<body style="background: #FFCC33;">
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
                                <img src="assets/images/logo.png" width="100" height="50" class="logo" alt="">
                                <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                            </a>
        
                        </div>
                        <!-- End Header Navigation -->
        
                        <!-- navbar menu -->
                        <div class="collapse navbar-collapse" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="index.php">About</a></li>
                                <li><a href="index.php">Service</a></li>
                                <li><a href="index.php">Visit</a></li>
                                <li><a href="index.php">Testimonial</a></li>
                                <li><a href="index.php">Contact</a></li>
                            <li><a href="promoclient.php">promortion</a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
        
                </nav>

    <div class="container">
        <div class="row">
            <br>
           

        </div>
    </div>
    <br/>
    <br/> 
    <br/> 
    <br/> 
    <br/> 
    


<?php
                        
                        include "../core/promoadminC.php";
                        
                        $promo1C = new promoC();
                        $listepromo = $promo1C->afficherpromotion();
                        //$ress= $listepromo->fetchall();
                        
                        //$nbpromo=count($ress);
                        
                        
                 ?>
                



<table border="1" align="center"  width="100%"   >
  <tbody align="center">
	<tr>
  
		<td><h1 align="center">services</h1></td>
		<td><h1 align="center">date debut</h1></td>
		<td><h1 align="center">date fin</h1></td>
		<td><h1 align="center" color="black">promotion</h1></td>

		
  </tr>
  </br>
  </br>

<?php
	foreach ($listepromo as $row) {
    ?>
   
  
		<tr>
			<td><h3 align="center"><?PHP echo $row['idservice']; ?></h2></td>
			<td><h3 align="center"><?PHP echo date("d-m-Y", strtotime($row['datedeb'])) ?></h2></td>
			<td><h3 align="center"><?PHP echo date("d-m-Y", strtotime($row['datefin'])) ?></h2></td>
			<td><h3 align="center"><?PHP echo $row['valeur']; ?></h2></td>
			<td>
			
		
	<?PHP
	
}

	?> </tbody></table>




</body>
</html>