<html> 
    
    <head>
    
    </head>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    
    <body style="background:transparent;">
        
    </body>
    </html>
<?php

include "../../core/serviceC.php";

                    if (isset($_POST['modify2'])) {
                        $service1C = new serviceC();
                        $service1C->modify($_POST['name'],$_POST['change']);
                        echo('<script>swal("Done!", "Service updated !!", "success", {
                            buttons: false,
                            timer: 1729
                        }); </script>');
                        header("location: modify.php");
                    }
                    ?>