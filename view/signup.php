<?php 

include "../core/userC.php";
include "../entities/user.php";

if(!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['password']) )
{


$user1= new user($_POST['name'],$_POST['email'],$_POST['password']);


$user1C= new userC();
$user1C->findEmail($user1);

if(!$user1C->emailExists($user1->getEmail()))
{
    $user1C->addUser($user1);
    header('location: signupsuccessredir.php');
   
}
else header('location: signupfailedredir.php');


}
else echo('bruh check yo self');


?>

