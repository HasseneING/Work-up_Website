<html> 
    
    <head>
    
    </head>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    
    <body style="background:transparent;">
        
    </body>
    </html>
<?php

include "../core/eventC.php";

                    if (isset($_POST['modify'])) {
                        $event1C = new eventC();
                        $event1C->modify($_POST['nom_event'],$_POST['change'],$_POST['date_deb'],$_POST['change0'],$_POST['date_fin'],$_POST['change1']);
                        
                        header("location: modifyevent.php");
                    }
                    ?>