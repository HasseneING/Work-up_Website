
<?php 

include "../core/eventC.php";
include "../entities/eventi.php";


if(!empty($_POST['id']))
{
var_dump($_POST);
    $event1=new event($_POST['id'],$_POST['date_deb'],$_POST['date_fin'],$_POST['nom_event'],$_POST['descri']);
    $event1C=new eventC();
    $event1C->addevent($event1);
    header('location:addeventadmin.php');

}
else echo("Verifier les Champs! ");





?>