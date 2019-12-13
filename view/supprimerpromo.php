<?PHP

include "../core/promoadminC.php";

$promoC=new promoC();
if (isset($_POST["idpromotion"])){
	
	$promoC->supprimerpromotion($_POST["idpromotion"]);
	header('Location: afficherpromo.php');
}

?>