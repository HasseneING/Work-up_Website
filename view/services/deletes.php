<html> 
    
    <head>
    
    </head>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    
    <body style="background:transparent;">
        
    </body>
    </html>
<?PHP
            include "../../entities/service.php";
            include "../../core/serviceC.php";

		if (isset($_POST['name'])){
            
				$name=$_POST['name'];
				            
            if (isset($_POST['delete'])){
                $service2C=new serviceC();
                $service2C->delete($name);
                echo('<script>swal("Done!", "Service deleted !!", "success", {
                    buttons: false,
                    timer: 1729
                }); </script>');
                header( "refresh:1.7;url=delete.php" );
            }
        }
         
?>
        