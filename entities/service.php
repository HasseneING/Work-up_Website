<?php



class service{


private $name;


function __construct($name)
{
    $this->name=$name;
}


function getname(){
    return $this->name;
}


function setname($name){
    $this->name=$name;
}

}

?>