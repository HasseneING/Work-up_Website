<?php 

include "../core/reservationC.php";
include "../entities/reservation.php";


if(!empty($_POST['date']))
{

    $reservation1=new reservation($_POST['date'],$_POST['seats'],$_POST['phone'],$_POST['notes']);
    $reservation1C=new reservationC();
    $reservation1C->addReservation($reservation1);
    header('location:booking.html');

}




?>