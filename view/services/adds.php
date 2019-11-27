<?php

include "../../core/serviceC.php";
include "../../entities/service.php";

if ( !empty($_POST['name']) )
{ 
     
$service1=new service($_POST['name']);
$service1C=new serviceC();

$service1C->addservice($service1);

header('Location:adds.php');
}
else echo("Verifier les Champs! ");
?>

