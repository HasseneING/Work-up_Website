<html> 
    
    <head>
    
    </head>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    
    <body style="background:transparent;">
        
    </body>
    </html>
<?php

include "../core/eventC.php";
include "../entities/eventi.php";


                    if (isset($_POST['modify'])) {
                        $event2C = new eventC();
                        $event2C->modify($_POST['nom_event'],$_POST['change']);
                        
                        header("location: addeventadmin.php");
                    }
                    ?>