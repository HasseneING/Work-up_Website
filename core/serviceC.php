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

    function afficherServices()
    {
        $sql="SELECT * from Services";
        $db= config::getConnection();
        try{
            $liste=$db->query($sql);
            return $liste;
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

        $sql = "INSERT into services (id,name) 
                values (:id,:name) ";

        $db = config::getConnection();

        try{

        $req=$db->prepare($sql);

        $name=$service->getname();
    
        $req->bindValue(':name',$name);

        
        $req->execute();
    

        }catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
    }



}