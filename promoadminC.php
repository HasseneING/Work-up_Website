<?php
include "../config.php";

class promoC{


    function afficherpromotion()
	{
		$sql = "SELECT * From promotion";
		$db = config::getConnection();
		try {
			$req = $db->prepare($sql);
			$liste = $db->query($sql);
			
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
    }
    
function afficherservices()
	{
		$sql = "SELECT * From offres";
		$db = config::getConnection();
		try {
			$req = $db->prepare($sql);
			$liste = $db->query($sql);
			
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
    }
    

    function afficherpromotions($promotion) 
	{
		echo "services: " . $promotion->getServices() . "<br>";
		echo "datef: " . $promotion->getDatedeb() . "<br>";
		echo "datef: " . $promotion->getDatefin() . "<br>";
		echo "promo: " . $promotion->getValeur() . "<br>";
    }
    
    function ajouterpromotion($promotion)
   	{
	
		
   		// echo ($promotion::idservice);
   	//	$this->valeur=$valeur;
	//	$this->idservice=$services;
     //   $this->datedeb=$datedeb;
	//	$this->datefin=$datefin;
   		$sql = "insert into promotion (idservice,datedeb,datefin,valeur) values ('".$promotion->idservice."'";
   		$sql= $sql. ",'".$promotion->datedeb;
   		$sql= $sql. "','".$promotion->datefin;
   		$sql= $sql. "',".$promotion->valeur.")";
	
//exit;
		$db = config::getConnection();
		try {
			$req = $db->prepare($sql);
			

		/*	$services = $promotion->getidservices();
			$datedeb= $promotion->getDatedeb();
			$datefin = $promotion->getDatefin();
			$valeur = $promotion->getValeur();
			
			$req->bindValue(':services', $services);
			$req->bindValue(':mydd', $datedeb);
			$req->bindValue(':mydf', $datefin);
			$req->bindValue(':promo', $valeur);*/
		
		
			

			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
    function supprimerpromotion($idpromotion)
	{
		//$sql = "DELETE FROM promotion where idpromotion=:idpromotion";
		$sql = "DELETE FROM promotion where idpromotion=".$idpromotion;
		$db = config::getConnection();
		$req = $db->prepare($sql);
		//$req->bindValue(':idpromotion', $idpromotion);
		//var_dump($req);
		//exit;
		try {
			$req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
    

    function modifierpromotion($promotion, $idpromotion )
	{
		$services= $promotion->getIdservices();
			$datedeb= $promotion->getDatedeb();
			$datefin = $promotion->getDatefin();
			$valeur= $promotion->getValeur();
			
        $sql = "UPDATE promotion  SET idservice=";
		$sql=$sql.'"'.$services.'"';
		$sql=$sql.", datedeb='".$datedeb."'";
		$sql=$sql.", datefin='".$datefin."'";
		$sql=$sql.", valeur=".$valeur;
		$sql=$sql." WHERE idpromotion=".$idpromotion;
		
		$db = config::getConnection();

		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try {
			$req = $db->prepare($sql);

		/*	$services= $promotion->getIdservices();
			$datedeb= $promotion->getDatedeb();
			$datefin = $promotion->getDatefin();
			$valeur= $promotion->getValeur();
			
            $datas = array(':idpromotion' => $idpromotion,':services' => $services, ':mydd' => *$datedeb, ':mydf' => $datefin, ':promo' => $valeur);
			$req->bindValue(':idpromotion', $idpromotion);
			$req->bindValue(':services', $services);
			$req->bindValue(':mydd', $datedeb);
			$req->bindValue(':mydf', $datefin);
			$req->bindValue(':promo', $valeur);*/
	


			$s = $req->execute();

			// header('Location: index.php');
		} catch (Exception $e) {
			echo " Erreur ! " . $e->getMessage();
			echo " Les datas : ";
			print_r($datas);
		}
	}
    

   
	
	function recupererpromotion($idpromotion)
	{
		
		$sql = "SELECT * from promotion where idpromotion=".$idpromotion;
		$db = config::getConnection();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	



	function client()
    { 
        
        $sql = "SELECT email  FROM users where Account_Type!='admin'";
        
     
        $db= config::getConnection();
        try{
            $liste=$db->query($sql);
            }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            }
            return $liste;
    }
   
  
}


	
			
			
    ?>