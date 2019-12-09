<?PHP
include "../../core/gallerieC.php";
include "../../entities/service.php";
$gallerieC=new gallerieC();
var_dump($_POST);

if (isset($_POST['id'])){
	$gallerieC->supprimerGallerie($_POST['id']);
	header('location: supprimerImage.php');
}

?>