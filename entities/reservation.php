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

class event{
    private $id;
    private $date_deb ;
    private $date_fin ;
    private $nom_event ;
    private $descri ;
    private $image;
    private $link;

    function __construct($id,$date_deb,$date_fin,$nom_event,$descri,$image,$link)
    {
    $this->id=$id;
    $this->date_deb=$date_deb;
    $this->date_fin=$date_fin;
    $this->nom_event=$nom_event;
    $this->descri=$descri;
    $this->image=$image;
    $this->link=$link;


    }
    function getid(){
        return $this->id;
    }
    function getdate_deb(){
        return $this->date_deb;
    }
    function getdate_fin(){
        return $this->date_fin;
    }
    function getnom_event(){
        return $this->nom_event;
    }
    function getdescription(){
        return $this->descri;
    }
    function getimage(){
        return $this->image;
    }
    function getlink(){
        return $this->link;
    }

    function setid($id){
        $this->id=$id;
    }
    function setdate_deb($date_deb){
        $this->date_deb=$date_deb;
    }
    function setPhone($date_fin){
        $this->date_fin=$date_fin;
    }
    function setNotes($nom_event){
        $this->nom_event=$nom_event;
}

function setdecription($descri){

    $this->descri=$descri;
}
function setimage($image){

    $this->image=$image;
}
function setlink($link){

    $this->link=$link;
}
}





?>