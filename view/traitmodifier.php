<?PHP
	include "../entities/promoadminE.php";
	include "../core/promoadminC.php";
	
	if (isset($_POST['idp_mod'])) {
		$promot1= new promotion($_POST['promo'],$_POST['services'], $_POST['mydd'], $_POST['mydf'] );
		$promoC3= new promoC();
		$promoC3->modifierpromotion($promot1, $_POST['idp_mod']);
		echo $_POST['idp_mod'];
		header('Location: afficherpromo.php');
	}
	?>