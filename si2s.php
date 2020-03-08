<?php

class Person
{
	public $photo;
	public $id_photo;
	public $prenom;
	public $fonction;
	public $buddys;
	public $frequency;

	public function __construct($photo, $theta_variabled_photo, $prenom, $fonction, $buddys, $frequency)  #Constructeur crée une personne avec ca photo, son nom... 
	{
			$this->photo = $photo;
			$this->id_photo = $theta_variabled_photo;
			$this->prenom = $prenom;
			$this->fonction = $fonction;
			$this->buddys = $buddys;
			$this->frequency = $frequency;
	}
}

# Création des differentes Personnes via le Construteur
#JOHAN
$patrick = new Person('./items/johan/pat.PNG', 100, 'Patrick', 'Directeur', ['Olege', 'Gabriel', 'Yoann'], ['1', '1', '3']);
$olege = new Person('./items/johan/olege.PNG', 101, 'Olege', 'Technicien', ['Olege', 'Gabriel', 'Yoann'], ['3', '6', '3']);
$johan = new Person('./items/johan/johan.PNG', 102, 'Johan', 'Stagiaire', ['Olege', 'Gabriel', 'Yoann'], ['3', '6', '1']);
$charles = new Person('./items/johan/charles.PNG', 103, 'Charles', 'Technicien', ['Olege', 'Gabriel', 'Yoann'], ['1', '6', '1']);
$caroline = new Person('./items/johan/caroline.PNG', 104, 'Caroline', 'Secretaire', ['Olege', 'Gabriel', 'Yoann'], ['3', '3', '6']);
$gabriel = new Person('./items/johan/gabriel.PNG', 105, 'Gabriel', 'Ingenieure', ['Olege', 'Gabriel', 'Yoann'], ['6', '6', '6']);
$yoann = new Person('./items/johan/yoan.PNG', 106, 'Yoann', 'Technicien', ['Olege', 'Gabriel', 'Yoann'], ['1', '1', '3']);
$herve = new Person('./items/johan/herve.PNG', 107, 'Herve', 'Ingenieure', ['Olege', 'Gabriel', 'Yoann'], ['1', '3', '3']);
$nabil = new Person('./items/johan/nabil.PNG', 108, 'Nabil', 'Ingenieure', ['Olege', 'Gabriel', 'Yoann'], ['6', '6', '6']);
$groupe = new Person('./items/johan/groupe.jpg', 108, 'Groupe Rouge', 'Client SI2S', ['Olege', 'Gabriel', 'Yoann'], ['6', '1', '1']);
$balibaris = new Person('./items/johan/balibaris.jpg', 108, 'Balibaris', 'Client SI2S', ['Olege', 'Gabriel', 'Yoann'], ['3', '1', '1']);
$entuitae = new Person('./items/johan/intuitae.jpg', 108, 'Intuitae', 'Client SI2S', ['Olege', 'Gabriel', 'Yoann'], ['3', '6', '1']);

#FRANCOIS

#PAUL

#tableau contenant les personnes
$tabPersonJohan = array($patrick, $olege, $johan, $charles, $caroline, $gabriel, $yoann, $herve, $nabil, $groupe, $balibaris, $entuitae);
$tabPersonFrancois = array();
$tabPersonPaul = array();

#Création d'un cercle pour afficher les personnes
$theta_min = 0;
$theta_max = 3.141592653589793 * 2;
$r = 400;
$x_start = 600;
$y_start = 450;
$coords = [];

for ($theta_variable = $theta_min, $i = 0; $theta_variable < $theta_max; $theta_variable = $theta_variable + (($theta_max) / (count($tabPersonJohan))), $i++)
{
	$x = $x_start + $r * cos($theta_variable);
	$y = $y_start + $r * sin($theta_variable);

	array_push($coords,[$x, $y]);
	echo'<div id="div1" style="top:'.$y.'; left:'.$x.';  position:absolute;"> <img style="width: 80px; height: 8
	0px;" src="'.$tabPersonJohan[$i]->photo.'" alt="patrick"/> <h3>'.$tabPersonJohan[$i]->prenom.'  '.$tabPersonJohan[$i]->fonction.'</h3></div> ';
}

for ($i = 0; $i < count($tabPersonJohan); $i++) {
	for ($j = 0; $j < count($tabPersonJohan[$i]->buddys); $j++) {
		for ($k = 0; $k < count($tabPersonJohan); $k++) {
			if ($tabPersonJohan[$i]->buddys[$j] == $tabPersonJohan[$k]->prenom) {
				echo'
					<div id="div2" style="position:absolute">
					<svg width="500000" height="50000000">
						<line x1="'.$coords[$k][0].'" y1="'.$coords[$k][1].'" x2="'.$coords[$i][0].'" y2="'.$coords[$i][1].'" style="stroke:rgb(255,0,0);
						stroke-width:'.$tabPersonJohan[$i]->frequency[$j].'" />
					</svg>
					</div>';
			}
		}
	}
}

?>
