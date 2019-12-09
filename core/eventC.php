<?php
include "../config.php";

class eventC
{


    function afficherevent()
    {
        $sql="SELECT * from events";
        $db= config::getConnection();
        try{
            $liste=$db->query($sql);
            return $liste;
            }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            }
    }

    function findevent($id)
    {
        $sql = "SELECT 1 FROM events where id=$id";
        $db = config::getConnection();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    
    function modifyevent($id,$update)
    {
        $sql = "UPDATE events SET id=:id WHERE id=$id";

        $db = config::getConnection();
        try {

            $req = $db->prepare($sql);

            $req->bindValue(':id',$id);

            $req->execute();

            $s = $req->execute();
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
        }
    }

    function deletevent($nom_event)
    {
        $sql = "DELETE FROM events where nom_event=:$nom_event";
        $db = config::getConnection();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':nom_event', $nom_event);
            $req->execute();
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
        }
    }

    function addevent($event)
    {
        
 

        $sql = "INSERT into events(id,date_deb,date_fin,nom_event,descri) 
                values (:id,:date_deb,:date_fin,:nom_event,:descri)";

        $db = config::getConnection();

        try{

        $req=$db->prepare($sql);
		
        $id=$event->getid();
        $date_deb=$event->getdate_deb();
        $date_fin=$event->getdate_fin();
        $nom_event=$event->getnom_event();
        $descri=$event->getdescription();
    
        $req->bindValue(':id',$id);
        $req->bindValue(':date_deb',$date_deb);
        $req->bindValue(':date_fin',$date_fin);
        $req->bindValue(':nom_event',$nom_event);
        $req->bindValue(':descri',$descri);
        
        
        $req->execute();
    

        }catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
    }



}


?>