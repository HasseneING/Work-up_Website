<?php



class reservation{


private $date;
private $seats;
private $phone;
private $notes;



function __construct($date,$seats,$phone,$notes)
{
    $this->date=$date;
    $this->seats=$seats;
    $this->phone=$phone;
    $this->notes=$notes;
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

    return $this->phone;
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
}



?>