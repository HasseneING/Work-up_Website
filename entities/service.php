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

function setName($name){
    $this->name=$name;
}}

?>