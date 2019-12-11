<?php



class service{


private $name;
private $image;



function __construct($name,$image)
{
    $this->name=$name;
    $this->image=$image;

}

function getname(){
    return $this->name;
}
function getimage(){
    return $this->image;
}

function setName($name){
    $this->name=$name;
}
function setimage($image){
    $this->image=$image;
}

}

?>