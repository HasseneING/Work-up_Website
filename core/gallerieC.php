<?PHP
// include_once "../config.php";
INCLUDE "../../config.php";

class gallerieC {

	function ajouterGaLlerie($gallerie){
		$sql="insert into images (file_name,title,created,modified,status) values (:file_name,:title,:created,:modifided,:status)";
		$db = config::getConnection();
		try{
        $req=$db->prepare($sql);
		
        $file_name=$gallerie->getFile_name();
        $title=$gallerie->getTitle();
        $created=$gallerie->getCreated();
        $modifided=$gallerie->getModifided();
        $status=$gallerie->getStatus();

		$req->bindValue(':file_name',$file_name);
		$req->bindValue(':title',$title);
		$req->bindValue(':created',$created);
		$req->bindValue(':modifided',$modifided);
		$req->bindValue(':status',$status);
		
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherGallerie(){
		$sql="SElECT * From images";
		$db = config::getConnection();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerGallerie($id)
{
    $sql="DELETE FROM images where id=:id";
    
    $db = config::getConnection();
    try{
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        $req->execute();
    }
    catch (Exception $e){
        echo " Erreur ! ".$e->getMessage();
    }
}

	function modifierGallerie($file_name,$title,$modifided,$id){
		$sql="UPDATE images SET file_name=:file_name,modified=:modified,title=:title WHERE id='$id'";
		
		$db = config::getConnection();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
	try{	
		$req=$db->prepare($sql);

		$req->bindValue(':file_name',$file_name);
		$req->bindValue(':title',$title);
		$req->bindValue(':modified',$modifided);
		
        $req->execute();
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }
		
	}
	function recupererGallerie($id){
		$sql="SELECT * FROM images WHERE id='$id'";
		$db = config::getConnection();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	

	
}

?>