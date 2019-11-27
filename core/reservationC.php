

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

    function addReservation($reservation)
    {
        $sql = "INSERT into reservation (date_reservation,seats,phone,notes) 
                values (:date_reservation,:seats,:phone,:notes) ";

        $db = config::getConnection();

        try{

        $req=$db->prepare($sql);
		
        $date_reservation=$reservation->getDate();
        $seats=$reservation->getSeats();
        $phone=$reservation->getPhone();
        $notes=$reservation->getNotes();
    
        $req->bindValue(':date_reservation',$date_reservation);
        $req->bindValue(':seats',$seats);
        $req->bindValue(':phone',$phone);
        $req->bindValue(':notes',$notes);
        
        
        $req->execute();
    

        }catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
    }



}


?>