<?php
include "../config.php";

class userC
{

    function findUser($user)
    { 
        $email=$user->getEmail();
        $sql = "SELECT * FROM users where email=$email";
        $db= config::getConnection();
        try{
            $liste=$db->query($sql);
            }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
            }
    }


    function emailExists($email) {
        $pdo= config::getConnection();
        $stmt = $pdo->prepare("SELECT 1 FROM users WHERE email=?");
        $stmt->execute([$email]); 
        return $stmt->fetchColumn();
    }



    function addUser($user)
    {
        
 

        $sql = "INSERT into users (name,email,password) 
                values (:name,:email,:password) ";

        $db = config::getConnection();

        try{

        $req=$db->prepare($sql);
		
        $name=$user->getName();
        $email=$user->getEmail();
        $password=$user->getPassword();
    
        $req->bindValue(':name',$name);
        $req->bindValue(':email',$email);
        $req->bindValue(':password',$password);

        
        $req->execute();
    

        }catch(Exception $e){
            die('Erreur: '. $e->getMessage());
        }
    }



}