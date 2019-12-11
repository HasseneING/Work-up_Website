<html>

<head>

</head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body style="background:transparent;">

</body>

</html>

<?php

include "../../core/serviceC.php";
include "../../entities/service.php";

if (!empty($_POST['name']) && !empty($_FILES['image']['name'])) {

    $service1 = new service($_POST['name'], $_FILES['image']['name']);
    $service1C = new serviceC();
    $target = "images/" . basename($_FILES['image']['name']);

    if (!$service1C->Exists($_POST['name'])) {
        $service1C->addservice($service1);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
        echo ('<script>swal("Done!", "Service added", "success", {
        buttons: false,
        timer: 1729
    }); </script>');
        header("refresh:1.7;url=add.php");
    } else {
        echo ('<script>swal("Error!", "Service exists !!! try again", "error", {
        buttons: false,
        timer: 1729
    }); </script>');
        header("refresh:1.7;url=add.php");
    }
} else {
    echo ('<script>swal("Error!", "Empty inputs !!! try again", "error", {
        buttons: false,
        timer: 1729
    }); </script>');
    header("refresh:1.7;url=add.php");
}


?>

</html>