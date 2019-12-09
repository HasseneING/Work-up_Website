<?PHP
class gallerie
{
	private $file_name;
	private $title;
	private $created;
	private $modified;
	private $status;
	function __construct($file_name,$title,$created,$modified,$status)
	{
		$this->file_name=$file_name;
		$this->title=$title;
		$this->created=$created;
		$this->modified=$modified;
		$this->status=$status;
	}
	
	function getFile_name()
	{
		return $this->file_name;
	}
	function getTitle()
	{
		return $this->title;
	}
	function getCreated()
	{
		return $this->created;
	}
	function getModifided()
	{
		return $this->modified;
	}
	function getStatus()
	{
		return $this->status;
	}

	

	// function setProbleme($probleme)
	// {
	// 	$this->probleme=$probleme;
	// }
	// function setAutre($autre)
	// {
	// 	$this->autre=$autre;
	// }
	// function setDate_creation($date_creation)
	// {
	// 	$this->date_creation=$date_creation;
	// }
	// function setTarifHoraire($etat)
	// {
	// 	$this->etat=$etat;
	// }
	// function setEmail($email)
	// {
	// 	$this->email=$email;
	// }
	// function setImage($image)
	// {
	// 	$this->image=$image;
	// }
	// function setAvis($avis)
	// {
	// 	$this->avis=$avis;
	// }
	// function setUtilisateur($utilisateur)
	// {
	// 	$this->utilisateur=$utilisateur;
	// }
	// function setReponse($reponse)
	// {
	// 	$this->reponse=$reponse;
	// }
	
}

?>