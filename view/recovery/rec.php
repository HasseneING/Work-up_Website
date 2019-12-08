<html> 
    
<head>

</head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body style="background:transparent;">
    
</body>
</html>

<?php

include "../../core/userC.php";

$user1C = new userC();

    if (!empty($_POST['email'])) {
        if ($user1C->emailExists($_POST['email'])) {
            echo ('<script>swal("Done!", "An email to recover your password has been sent!", "success", {
                buttons: false,
                timer: 1729
            }); </script>');
        } else {
            echo ('<script>swal("OUPS !", "Email doesn t exist !", "error", {
                buttons: false,
                timer: 1729
            }); </script>');
        }
    } else {
        echo ('<script>swal("OUPS !", "Insert an Email please !", "error", {
            buttons: false,
            timer: 1729
        }); </script>');
    }



?>