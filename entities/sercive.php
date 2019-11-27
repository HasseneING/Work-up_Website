<?php



class service{


private $id;


function __construct($id)
{
    $this->id=$id;
}

function getid(){
    return $this->id;
}

function setid($id){
    $this->id=$id;
}

}

?>