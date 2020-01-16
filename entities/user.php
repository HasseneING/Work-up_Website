<?php



class user{


private $name;
private $email;
private $password;


function __construct($name,$email,$password)
{
    $this->name=$name;
    $this->email=$email;
    $this->password=$password;
}
function getName(){
    return $this->name;
}
function getEmail(){
    return $this->email;
}

function getPassword(){

    return $this->password;
}
function setName($name){
    $this->name=$name;
}
function setEmail($email){
    $this->email=$email;
}
function setPassword($password){
    $this->password=$password;
}
}






?>