	
<?PHP
            include "../entities/eventi.php";
            include "../core/eventC.php";

		if (isset($_POST['nom_event'])){
            
				$nom_event=$_POST['nom_event'];
				            
            if (isset($_POST['delete'])){
                $event2C=new eventC();
                $event2C->deletevent($nom_event);
                header('location:addeventadmin.php');
            }
        }
         
?>
        