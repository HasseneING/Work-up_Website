<html> 
    
<head>

</head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body style="background:black;">
    
</body>
</html>

<?php
 

include "../core/userC.php";
include "../entities/user.php";

$email=$_POST['email'];
$password=$_POST['password'];
$user1C=new userC();
$enc_password=$user1C->findPassword($email);
$role=$user1C->FindRole($email);
echo $role;

if(password_verify($password,$enc_password))
{
    
    if($role=='user')
        header( "Location:loggedin.html" );
    else
        header("location:admin.php");
}
else
{
    echo('<script>swal("Error!", "Wrong Email or password! Try again.", "error", {
        buttons: false,
        timer: 1729
    }); </script>');
    header( "refresh:1.7;url=login.php" );

}


?>
