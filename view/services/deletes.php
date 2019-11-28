	
<?PHP
            include "../../entities/service.php";
            include "../../core/serviceC.php";

		if (isset($_POST['name'])){
            
				$name=$_POST['name'];
				            
            if (isset($_POST['delete'])){
                $service2C=new serviceC();
                $service2C->delete($name);
                header('location:delete.php');
            }
        }
         
?>
        