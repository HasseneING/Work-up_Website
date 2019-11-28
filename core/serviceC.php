<?php
include __DIR__ . "/../config.php";

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

        $sql = "INSERT into services (name) 
                values (:name)";

        $db = config::getConnection();

        try {

            $req = $db->prepare($sql);

            $name = $service->getname();

            $req->bindValue(':name', $name);


            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function modify($name,$update)
    {
        $sql = "UPDATE services SET name=:name WHERE name=$name";

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
}
