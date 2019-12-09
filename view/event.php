
<?php 

include "../core/eventC.php";
include "../entities/eventi.php";


if(!empty($_POST['id']))
{

    $event1=new event($_POST['id'],$_POST['date_deb'],$_POST['date_fin'],$_POST['nom_event'],$_POST['descri']);
    $event1C=new eventC();
    $event1C->addevent($event1);
    header('location:addeventadmin.html');

}
else echo("Verifier les Champs! ");





?>