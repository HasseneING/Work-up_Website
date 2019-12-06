<?php



class reservation{


private $date;
private $seats;
private $phone;
private $notes;
private $user_ID;



function __construct($date,$seats,$phone,$notes,$user_ID)
{
    $this->date=$date;
    $this->seats=$seats;
    $this->phone=$phone;
    $this->notes=$notes;
    $this->user_ID=$user_ID;
}

function getDate(){
    return $this->date;
}
function getSeats(){
    return $this->seats;
}

function getPhone(){

    return $this->phone;
}

function getNotes(){

    return $this->notes;
}
function getUserID(){

    return $this->user_ID;
}


function setDate($date){
    $this->date=$date;
}
function setSeats($seats){
    $this->seats=$seats;
}
function setPhone($phone){
    $this->phone=$phone;
}
function setNotes($notes){
    $this->notes=$notes;
}
function setUserID($user_ID){
    $this->user_ID=$user_ID;
}

}



?>