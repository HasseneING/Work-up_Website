<?php 

include "../core/userC.php";
include "../entities/user.php";




$secretKey="6LcG08YUAAAAACVEsyIMyRx41ehzgETVgBUyBjXz";
$responseKey=$_POST['g-recaptcha-response'];
$userIP= $_SERVER['REMOTE_ADDR'];
$url="https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
$response=file_get_contents($url);
$response=json_decode($response);

if(!empty($_POST['name']) and !empty($_POST['email']) and !empty($_POST['password']) and $response->success )
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
else header('location: signupfailedredir.php');



?>

