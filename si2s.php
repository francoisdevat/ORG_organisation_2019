<?php

class Person
{

	public $photo;
	public $id_photo;
	public $place;
	public $prenom;
	public $fonction;
	
	public function __construct( $photo, $id_photo, $place, $prenom, $fonction)
	{
			$this->photo = $photo;
			$this->id_photo = $id_photo;
			$this->place = $place;
			$this->prenom = $prenom;
			$this->fonction = $fonction;


	}
}
$patrick = new Person('pat.PNG', 100, 1, 'Patrick', 'Directeur');
$olege = new Person('olege.PNG', 101, 2, 'Olege', 'Technicien');
$johan = new Person('johan.PNG', 102, 2, 'Johan', 'Stagiaire');




echo' 
<table>
<caption> SI2S </caption>
<tr><th><img src="'.$patrick->photo.'" alt="patrick"/></th></tr>
<tr><th><img src="'.$olege->photo.'" alt="oleg"/></th><th><img src="'.$johan->photo.'" alt="johan"/></th></tr>
</table>'
;

?>

