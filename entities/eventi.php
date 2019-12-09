<?php
class event{
    private $id;
    private $date_deb ;
    private $date_fin ;
    private $nom_event ;
    private $descri ;

    function __construct($id,$date_deb,$date_fin,$nom_event,$descri)
    {
    $this->id=$id;
    $this->date_deb=$date_deb;
    $this->date_fin=$date_fin;
    $this->nom_event=$nom_event;
    $this->descri=$descri;
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
}

?>