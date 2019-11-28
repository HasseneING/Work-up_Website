<html> 
    
<head>

</head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body style="background:black;">
    
</body>
</html>

<?php

include "../../core/serviceC.php";
include "../../entities/service.php";

    if ( !empty($_POST['name']) )
{ 
     
$service1=new service($_POST['name']);
$service1C=new serviceC();

if(!$service1C->Exists($_POST['name'])){
     $service1C->addservice($service1);
  header('Location: add.php');
}
    else
 {
    echo('<script>swal("Error!", "Service exists !!! try agin", "error", {
        buttons: false,
        timer: 1729
    }); </script>');
    header( "refresh:1.7;url=add.php" );

}
}


?></html>