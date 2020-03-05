<?php

class Person
{
	public $photo;
	public $id_photo;
	public $prenom;
	public $fonction;
	public $buddys;

	public function __construct($photo, $theta_variabled_photo, $prenom, $fonction, $buddys)  #Constructeur crée une personne avec ca photo, son nom... 
	{
			$this->photo = $photo;
			$this->id_photo = $theta_variabled_photo;
			$this->prenom = $prenom;
			$this->fonction = $fonction;
			$this->buddys = $buddys;
	}
}

# Création des differentes Personnes via le Construteur 
$patrick = new Person('./items/johan/pat.PNG', 100, 'Patrick', 'Directeur', ['Olege', 'Gabriel', 'Yoan']);
$olege = new Person('./items/johan/olege.PNG', 101, 'Olege', 'Technicien', ['Olege', 'Gabriel', 'Yoan']);
$johan = new Person('./items/johan/johan.PNG', 102, 'Johan', 'Stagiaire', ['Olege', 'Gabriel', 'Yoan']);
$charles = new Person('./items/johan/charles.PNG', 103, 'Charles', 'Technicien', ['Olege', 'Gabriel', 'Yoan']);
$caroline = new Person('./items/johan/caroline.PNG', 104, 'Caroline', 'Secretaire', ['Olege', 'Gabriel', 'Yoan']);
$gabriel = new Person('./items/johan/gabriel.PNG', 105, 'Gabriel', 'Ingenieure', ['Olege', 'Gabriel', 'Yoan']);
$yoann = new Person('./items/johan/yoan.PNG', 106, 'Yoann', 'Technicien', ['Olege', 'Gabriel', 'Yoan']);
$herve = new Person('./items/johan/herve.PNG', 107, 'Herve', 'Ingenieure', ['Olege', 'Gabriel', 'Yoan']);
$nabil = new Person('./items/johan/nabil.PNG', 108, 'Nabil', 'Ingenieure', ['Olege', 'Gabriel', 'Yoan']);
$groupe = new Person('./items/johan/groupe.jpg', 108, 'Groupe Rouge', 'Client SI2S', ['Olege', 'Gabriel', 'Yoan']);
$balibaris = new Person('./items/johan/balibaris.jpg', 108, 'Balibaris', 'Client SI2S', ['Olege', 'Gabriel', 'Yoan']);
$theta_variablentuitae = new Person('./items/johan/intuitae.jpg', 108, 'Intuitae', 'Client SI2S', ['Olege', 'Gabriel', 'Yoan']);

#tableau contenant les personnes
$tabPerson = array($patrick, $olege, $johan, $charles, $caroline, $gabriel, $yoann, $herve, $nabil, $groupe, $balibaris, $theta_variablentuitae);

#Création d'un cercle pour afficher les personnes
$theta_min = 0;
$theta_max = 3.141592653589793 * 2;
$r = 400;
$x_start = 600;
$y_start = 450;
$coords = [];

for ($theta_variable = $theta_min, $i = 0; $theta_variable < $theta_max; $theta_variable = $theta_variable + (($theta_max) / (count($tabPerson))), $i++)
{
	$x = $x_start + $r * cos($theta_variable);
	$y = $y_start + $r * sin($theta_variable);
	
	echo'<div id="div1" style="top:'.$y.'; left:'.$x.';  position:absolute;"> <img style="width: 80px; height: 8
	0px;" src="'.$tabPerson[$i]->photo.'" alt="patrick"/> <h3>'.$tabPerson[$i]->prenom.'  '.$tabPerson[$i]->fonction.'</h3></div> ';
	
	array_push($coords,[$x, $y]);
}

//print_r($coords[5]);
//print_r($coords[0]);

echo'
<svg width="500" height="500">
	<line x1="253" y1="650" x2="1000" y2="450" stroke="black"/>
</svg>';

for ($i = 0; $i < count($tabPerson); $i++) {
	for ($j = 0; $j < count($tabPerson[$i]->buddys); $j++) {
		for ($k = 0; $k < count($tabPerson); $k++) {
			//echo($tabPerson[$i]->buddys[$j]);
			//echo($tabPerson[$k]->prenom);
			if ($tabPerson[$i]->buddys[$j] == $tabPerson[$k]->prenom) {
				//echo('test');
				/*echo'
					<svg width="500" height="500">
						<line x1='.$coords[$k][0].' y1='.$coords[$k][1].' x2='.$coords[$i][0].' y2='.$coords[$i][1].' stroke="black"/>
					</svg>';*/
			}
		}
	}
}

?>
