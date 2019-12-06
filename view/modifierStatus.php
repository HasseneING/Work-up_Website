<?php
session_start();
?>
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

$to_email=$reservation1C->findEmail($_POST['id_user']);

$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: noreply @ company . com';
//mail($to_email,$subject,$message,$headers);


if(isset($_POST['refuser']))
    {

        $reservation1C->modifierStatus($_POST['id_reservation'],$ref);
                echo('<script>swal("Refused!", "Reservation refuse avec success!", "error", {
            buttons: false,
            timer: 2900
        }); </script>');
        header( "refresh:3;url=Reservation.php" );  
      }
      else if(isset($_POST['delete']))
{
    $reservation1C->supprimerReservation($_POST['id_reservation']);
    

    echo('<script>swal("Deleted!", "Reservation deleted avec success!", "error", {
        buttons: false,
        timer: 2900
    }); </script>');
    header( "refresh:3;url=Reservation.php" );  
  }
    else {
        $reservation1C->modifierStatus($_POST['id_reservation'],"accepter");

        echo('<script>swal("Accepted!", "Reservation Accepte avec success!", "success", {
            buttons: false,
            timer: 2900
        }); </script>');
        header( "refresh:3;url=Reservation.php" );  

        




    } 
    
    
    ?>