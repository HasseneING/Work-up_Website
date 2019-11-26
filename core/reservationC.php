

<?php
include "../config.php";

class reservationC
{

    function findReservation($user)
    { 
        $email=$user->getEmail();
        $sql = "SELECT * FROM reservation where =$email";
        $db= config::getConnection();
        try{
            $liste=$db->query($sql);
            }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
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