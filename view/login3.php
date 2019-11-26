<?php
 
include "../core/userC.php";
include "../entities/user.php";

$email=$_POST['email'];
$password=$_POST['password'];
//Pull password from db  select 1 from users where email=?
$user1C=new userC();

$enc_password=$user1C->findPassword($email);
echo($enc_password);

if(!password_verify($password,$enc_password))
{
    echo('<script>swal("Time Field Empty!", "Pick a time!", "error", {
        buttons: false,
        timer: 1729
    }); </script>');
}


?>
