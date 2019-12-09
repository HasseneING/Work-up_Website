<?php

include __DIR__ . "/../config.php";

class userC
{

    function findEmail($user)
    {
        $email = $user->getEmail();
        $sql = "SELECT * FROM users where email=$email";
        $db = config::getConnection();
        try {
            $liste = $db->query($sql);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function findRole($email)
    {
        $sql = "SELECT Account_Type FROM users where email='$email'";
        $db = config::getConnection();
        try {
            $role = $db->query($sql);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
        return $role->fetchColumn();
    }
    function findName($email)
    {
        $sql = "SELECT Full_name FROM users where email='$email'";
        $db = config::getConnection();
        try {
            $name = $db->query($sql);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
        return $name->fetchColumn();
    }
   
    function findID($email)
    {
        $sql = "SELECT Account_ID FROM users where email='$email'";
        $db = config::getConnection();
        try {
            $name = $db->query($sql);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
        return $name->fetchColumn();
    }
    function findPassword($email)
    {

        $sql = "SELECT password FROM users where email='$email'";
        $db = config::getConnection();
        try {
            $enc_password = $db->query($sql);
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
        return $enc_password->fetchColumn();
    }


    function emailExists($email)
    {
        $pdo = config::getConnection();
        $stmt = $pdo->prepare("SELECT email FROM users WHERE email=?");
        $stmt->execute([$email]);
        return $stmt->fetchColumn();
    }



    function addUser($user)
    {

        $sql = "INSERT into users (Full_name,email,password) 
                values (:name,:email,:password) ";

        $db = config::getConnection();

        try {

            $req = $db->prepare($sql);

            $name = $user->getName();
            $email = $user->getEmail();
            $password = $user->getPassword();
            $enc_password = password_hash($password, PASSWORD_DEFAULT);

            $req->bindValue(':name', $name);
            $req->bindValue(':email', $email);
            $req->bindValue(':password', $enc_password);


            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}

class recoverC
{
    function emailExists($email)
    {
        $pdo = config::getConnection();
        $stmt = $pdo->prepare("SELECT email FROM recovery WHERE email=?");
        $stmt->execute([$email]);
        return $stmt->fetchColumn();
    }

    function update($email, $code)
    {
        $sql = "UPDATE recovery SET code=:code WHERE email='$email'";

        $db = config::getConnection();
        try {

            $req = $db->prepare($sql);

            $req->bindValue(':code', $code);

            $req->execute();

            $s = $req->execute();
        } catch (Exception $e) {
            echo " Erreur ! " . $e->getMessage();
        }
    }

    function addrecover($code, $email)
    {


        $sql = "INSERT into recovery (code,email) 
                values (:code,:email) ";

        $db = config::getConnection();

        try {

            $req = $db->prepare($sql);

            $req->bindValue(':code', $code);
            $req->bindValue(':email', $email);

            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}
