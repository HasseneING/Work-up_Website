

<?php
include "../config.php";

class reservationC
{


    function afficherReservation()
    {
        $sql="SELECT * from reservation";
        $db= config::getConnection();
        try{
            $liste=$db->query($sql);
            return $liste;
            }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            }
    }


    function modifierStatus($id_reservation,$status)
    {
        $sql="UPDATE reservation set status=:status where id_reservation=$id_reservation";
        $db = config::getConnection();
        try{
        $req=$db->prepare($sql);
        
        $req->bindvalue(':status',$status);
        $req->execute();
            
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();

        }
    }
function supprimerReservation($id_reservation)
{
    $sql="DELETE FROM reservation where id_reservation=:id_reservation";
    
    $db = config::getConnection();
    try{
        $req=$db->prepare($sql);
        $req->bindValue(':id_reservation',$id_reservation);
        $req->execute();
    }
    catch (Exception $e){
        echo " Erreur ! ".$e->getMessage();
    }
}


function afficherReservationID($ID_user)
{

    $sql="SELECT * from reservation where ID_user=$ID_user";
    $db= config::getConnection();
    try{
        $liste=$db->query($sql);
        return $liste;
        }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }

}
function findNameID($id)
{
    $sql = "SELECT Full_name FROM users where Account_ID='$id'";
    $db= config::getConnection();
    try{
        $name=$db->query($sql);
        }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }
        return $name->fetchColumn();
}

    function addReservation($reservation)
    {
        $sql = "INSERT into reservation (date_reservation,seats,phone,notes,ID_user) 
                values (:date_reservation,:seats,:phone,:notes,:ID_user) ";

        $db = config::getConnection();

        try{

        $req=$db->prepare($sql);
		
        $date_reservation=$reservation->getDate();
        $seats=$reservation->getSeats();
        $phone=$reservation->getPhone();
        $notes=$reservation->getNotes();
        $user_ID=$reservation->getUserId();

    
        $req->bindValue(':date_reservation',$date_reservation);
        $req->bindValue(':seats',$seats);
        $req->bindValue(':phone',$phone);
        $req->bindValue(':notes',$notes);
        $req->bindValue(':ID_user',$user_ID);
        
        
        $req->execute();
    

        }catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
    }

function findEmail($ID_user){

    $sql="SELECT email from users where Account_ID=$ID_user";
    $db= config::getConnection();
    try{
        $liste=$db->query($sql);
        return $liste->fetchColumn();
        }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
        }






}

}





class serviceC
{

    function findservice($name)
    {
        $sql = "SELECT 1 FROM services where name=$name";
        $db = config::getConnection();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function afficherServices()
    {
        $sql = "SELECT * from Services";
        $db = config::getConnection();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function Exists($name)
    {
        $pdo = config::getConnection();
        $stmt = $pdo->prepare("SELECT 1 FROM services WHERE name=?");
        $stmt->execute([$name]);
        return $stmt->fetchColumn();
    }

    function delete($name)
    {
        $sql = "DELETE FROM services where name=:name";
        $db = config::getConnection();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':name', $name);
            $req->execute();
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
        }
    }



    function addservice($service)
    {

        $sql = "INSERT into services (name,image) 
                values (:name,:image)";

        $db = config::getConnection();

        try {

            $req = $db->prepare($sql);

            $name = $service->getname();
            $image = $service->getimage();


            $req->bindValue(':name', $name);
            $req->bindValue(':image', $image);



            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function modify($name,$update)
    {
        $sql = "UPDATE services SET name=:name WHERE name='$name'";

        $db = config::getConnection();
        try {

            $req = $db->prepare($sql);

            $req->bindValue(':name',$update);

            $req->execute();

            $s = $req->execute();
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
        }
    }

    function modifyf($name,$update,$update1)
    {
        $sql = "UPDATE services SET name=:name,image=:image WHERE name='$name'";

        $db = config::getConnection();
        try {

            $req = $db->prepare($sql);

            $req->bindValue(':name',$update);
            $req->bindValue(':image',$update1);

            $req->execute();

            $s = $req->execute();
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
        }
    }
}

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