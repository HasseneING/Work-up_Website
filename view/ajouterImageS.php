<html> 
    
<head>

</head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<body style="background:black;">
    
</body>
</html>
<?PHP
include "../../entities/gallerie.php";
include "../../core/gallerieC.php";
session_start();
if (isset($_POST['title']))
{
	$target="uploads/images/".basename($_FILES['image']['name']);
	$image=$_FILES['image']['name'];
	$datetime = date_create()->format('Y-m-d H:i:s');

	$gallerie1=new gallerie($image,$_POST['title'],$datetime,$datetime,0);
	
$gallerie1C=new gallerieC();
$gallerie1C->ajouterGalLerie($gallerie1);


  
header('Location: supprimerImage.php');
	
}else{
	echo "vérifier les champs";
}
//*/






?>