<?php
include "../config.php";

class serviceC
{

    function findservice($service)
    { 
        $id=$service->getid();
        $sql = "SELECT * FROM services where id=$id";
        $db= config::getConnection();
        try{
            $liste=$db->query($sql);
            }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            }
    }


    function serviceExists($service) {
        $id=$service->getid();
        $pdo= config::getConnection();
        $stmt = $pdo->prepare("SELECT 1 FROM services WHERE id=?");
        $stmt->execute([$id]); 
        return $stmt->fetchColumn();
    }



    function addservice($service)
    {

        $sql = "INSERT into services (id,password) 
                values (,:id,:password) ";

        $db = config::getConnection();

        try{

        $req=$db->prepare($sql);

        $id=$service->getid();
    
        $req->bindValue(':id',$id);

        
        $req->execute();
    

        }catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
    }



}