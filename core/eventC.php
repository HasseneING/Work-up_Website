<?php
include "../config.php";

class eventC
{


    function afficherevent()
    {
        $sql="SELECT * from events ORDER BY date_deb";
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


    
 
    function modify($nom_event,$update)
    {
        $sql = "UPDATE events SET nom_event=:nom_event WHERE nom_event=:nom_event";

        $db = config::getConnection();
        try {

            $req = $db->prepare($sql);
             $req->bindValue(':nom_event',$update);
              $req->execute();

            $s= $req->execute();
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
        }
    }

    function deletevent($nom_event)
    {
        $sql = "DELETE FROM events where nom_event=:nom_event";
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
        
 

        $sql = "INSERT into events(id,date_deb,date_fin,nom_event,descri,image,link) 
                values (:id,:date_deb,:date_fin,:nom_event,:descri,:image,:link)";

        $db = config::getConnection();

        try{

        $req=$db->prepare($sql);
		
        $id=$event->getid();
        $date_deb=$event->getdate_deb();
        $date_fin=$event->getdate_fin();
        $nom_event=$event->getnom_event();
        $descri=$event->getdescription();
        $image=$event->getimage();
        $link=$event->getlink();
    
        $req->bindValue(':id',$id);
        $req->bindValue(':date_deb',$date_deb);
        $req->bindValue(':date_fin',$date_fin);
        $req->bindValue(':nom_event',$nom_event);
        $req->bindValue(':descri',$descri);
        $req->bindValue(':image',$image);
        $req->bindValue(':link',$link);
        
        $req->execute();
    

        }catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
    }

    function sortevent(){




    }



}



?>