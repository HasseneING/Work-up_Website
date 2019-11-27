<html> 
    
    <head>
    
    </head>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    
    <body style="background:black;">
        
    </body>
    </html>


<?php

include "../core/reservationC.php";

$reservation1C = new reservationC();
$ref="refuser";


if(isset($_POST['refuser']))
    {



        $reservation1C->modifierStatus($_POST['id_reservation'],$ref);
        



        echo('<script>swal("Refused!", "Reservation refuse avec success!", "error", {
            buttons: false,
            timer: 2900
        }); </script>');
        header( "refresh:3;url=admin.php" );  
      }
    else {




        $reservation1C->modifierStatus($_POST['id_reservation'],"accepter");

        echo('<script>swal("Accepted!", "Reservation Accepte avec success!", "success", {
            buttons: false,
            timer: 2900
        }); </script>');
        header( "refresh:3;url=admin.php" );  




    } 
    
    
    ?>