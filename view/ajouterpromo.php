<?PHP
include "../core/promoadminC.php";
//include "../core/userC.php";




class Promotion
{
    public $idpromotion;
    public $valeur;
    public $idservice;
    public $datedeb;
	public $datefin;
	
    function __construct($valeur,$services,$datedeb,$datefin)
    {
	    
    	
    
    	$this->valeur=$valeur;
		$this->idservice=$services;
        $this->datedeb=$datedeb;
		$this->datefin=$datefin;
		return $this;
		
	
    }
    
    function getValeur(){
		return $this->valeur;
	}
	function getDatedeb(){
		return $this->datedeb;
	}
	function getDatefin(){
		return $this->datefin;
	}
	function getIdservices(){
		return $this->idservice;
	}
	
	
    
    
    function setValeur($valeur){
		$this->valeur=$valeur;
		return $this;
	}
	function setIdservices($idservice){
		$this->idservices=$idservice;
		return $this;
	}
	function setDatedeb($datedeb){
		$this->datedeb=$datedeb;
		return $this;
    }
    function setDatefin($datefin){
		$this->datefin=$datefin;
		return $this;
    }
}


if (isset($_POST['services']) and isset($_POST['mydd']) and isset($_POST['mydf']) and isset($_POST['promo']))
{
 //$dd = date("d-m-Y", strtotime($_POST['mydd']));
 
// $df = date("d-m-Y", strtotime($_POST['mydf']));

$promotion1=new Promotion($_POST['promo'],$_POST['services'],$_POST['mydd'],$_POST['mydf']);

$promo1C=new promoC();
$promo1C->ajouterpromotion($promotion1);
$liste=$promo1C->client();

//var_dump($liste);
//exit;
$res= $liste->fetchall();

//exit;

$header="MIME-Version: 1.0\r\n";
$header.='From:"Work Up '."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='

<html>
	<body>
		<div align="center">
			
			<br />
			<p> promotion de '.$_POST['promo'].' % sur '.$_POST['services'].'  du '.$_POST['mydd'].' au '.$_POST['mydf'].' ne rattez pas cette ocasion  .
			<br />
			
		</div>
	</body>
</html>
';

$destinataire="";
//echo(count($res));
$nb=count($res);
//echo($nb);
//echo($res[1]["email"]);

$i=0;
while($i<$nb) {

	
	 { $destinataire=$res[$i]["email"]."; ".$destinataire;
	//echo($destinataire);
   //echo($i);

   $i++;}
	 
	 
	
mail($destinataire, "bonjour,", $message, $header);}




header('Location: afficherpromo.php');
	
}else{
	echo "vérifier les champs";
}
//*/


?>