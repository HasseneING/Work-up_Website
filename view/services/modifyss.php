<html>

<head>

</head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body style="background:transparent;">

</body>

</html>
<?php

include "../../core/serviceC.php";

if (isset($_POST['modify'])) {

    if (!empty($_FILES['foto']['name'])) {

        $target = "images/" . basename($_FILES['foto']['name']);
        move_uploaded_file($_FILES['foto']['tmp_name'], $target);
        $im = $_FILES['foto']['name'];
        $service1C = new serviceC();
        $service1C->modifyf($_POST['name'], $_POST['change'], $im);
        echo ('<script>swal("Done!", "Service updated !!", "success", {
                            buttons: false,
                            timer: 1729
                        }); </script>');
        header("location: modify.php");
    } else {
        $service1C = new serviceC();
        $service1C->modify($_POST['name'], $_POST['change']);
        echo ('<script>swal("Done!", "Service updated !!", "success", {
                            buttons: false,
                            timer: 1729
                        }); </script>');
        header("location: modify.php");
    }
}
?>