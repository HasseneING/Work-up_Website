<html>

<head>

</head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body>
    <?php

include "../../core/userC.php";

$user1c = new userC();

if ($_POST['insert'] == $_POST['insert1']) {
    $user1c->update($_POST['email'],$_POST['insert']);
    echo ('<script>swal("DONE", "password changed !", "success", {
        buttons: false,
        timer: 1729
    }); </script>');
    header("refresh:1.7;url=../login.php");
} else {
    echo ('<script>swal("OUPS !", "Wrong code", "error", {
        buttons: false,
        timer: 1729
    }); </script>');
    header("refresh:1.7;url=newcode.php");
}

?>

</body>
</html>