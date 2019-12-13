<?php


    class Promotion
{
    public $idpromotion;
    public $valeur;
    public $idservice;
    public $datedeb;
	public $datefin;
	



    
    function __construct($valeur,$services,$datedeb,$datefin){
		
	    
		$this->valeur=$valeur;
		$this->idservice=$services;
        $this->datedeb=$datedeb;
		$this->datefin=$datefin;
	    return $this;
	
    }
    
    function getValeur(){
		return $this->valeur;
	}
	function getDatedeb(){
		return $this->datedeb;
	}
	function getDatefin(){
		return $this->datefin;
	}
	function getIdservices(){
		return $this->idservice;
	}
	
	
    
    
    function setValeur($valeur){
		$this->valeur=$valeur;
		return $this;
	}
	function setIdservices($idservice){
		$this->idservice=$idservice;
		return $this;
	}
	function setDatedeb($datedeb){
		$this->datedeb=$datedeb;
		return $this;
    }
    function setDatefin($datefin){
    	
		$this->datefin=$datefin;
		return $this;
    }
}

    
?>