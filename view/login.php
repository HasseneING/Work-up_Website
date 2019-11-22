<?php
 var_dump($_POST);



 if($success=true)
    {
        header('location:loggedin.html');
    }
    else    {
        echo('error');
    }
?>
