<html>

<head>

</head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body>
    <?php
session_start();
echo $_POST['code'];
echo " ";
echo $_SESSION['code'];
if($_POST['code'] == $_SESSION['code'])
{
    header('location: newcode.php');
}
else{
    echo ('<script>swal("OUPS !", "Wrong code", "error", {
        buttons: false,
        timer: 1729
    }); </script>');
header("refresh:1.7;url=aftermail.php");
}
?>
</body>
</html>
