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
<div id="div1" style="width: 200px; height: 150px; top:0; left:700;  position:absolute;"> <img src="'.$patrick->photo.'" alt="patrick"/> <h3>'.$patrick->prenom.'  '.$patrick->fonction.'</h3></div>
<div id="div2" style="width: 200px; height: 150px; top:300px; left:1000px;  position:absolute;"><img src="'.$olege->photo.'" alt="oleg"/> <h3>'.$olege->prenom.'  '.$olege->fonction.'</h3></div>
<svg width="1500" height="1500"><line x1="700" y1="00" x2="1500" y2="1350" stroke="black"/></svg>
';
?>

