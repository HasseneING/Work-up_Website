

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


?>