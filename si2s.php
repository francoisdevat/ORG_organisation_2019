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
$nicolas = new Person('./item/francois/nicolas.PNG', 100, 'Nicolas', 'Directeur', ['Emeline', 'Charlie', 'Pierre', 'Mathieu' 'Eve'], ['3', '3', '3', '3', '6']);
$emeline = new Person('./item/francois/emeline.PNG', 101, 'Emeline', 'Ingenieure', ['Nicolas', 'Francois' 'Marc'], ['3', '6', '6');
$francois = new Person('./item/francois/francois.PNG', 102, 'Francois', 'Stagiaire', ['Emeline', 'Marc'], ['6', '6']);
$marc = new Person('./item/francois/marc.PNG', 103, 'Marc', 'Technicien', ['Emeline', 'Francois'], ['6', '6']);
$charlie = new Person('./item/francois/charlie.PNG', 104, 'Charlie', 'Ingenieure', ['Nicolas', 'Camille', 'Mateo'], ['3', '6', '6']);
$camille = new Person('./item/francois/camille.PNG',105, 'Camille', 'Stagiaire', ['Charlie', 'Mateo'], ['6', '6']);
$mateo = new Person('.item/francois/mateo.PNG', 106, 'Mateo', 'Technicien', ['Camille', 'Chalie'], ['6', '6']);
$pierre = new Person('.item/francois/pierre.PNG', 107, 'Pierre', 'Technicien', ['Nicolas', 'Clorox'], ['3', '3']);
$mathieu = new Person('.item/francois/mathieu.PNG', 108, 'Mathieu', 'Chargé Relation Client', ['Clorox', 'Nicolas', 'Technip', 'Topaz'], ['3', '3', '3', '1');
$eve = new Person('.item/francois/mathieu.PNG', 108, 'Eve', 'Secretaire', ['Nicolas', 'Technip', 'Clorox', 'Topaz'], ['6', '1', '1', '1']);
$technip = new Person('.item/francois/technip.PNG', 108, 'Technip','Client GTS', ['Mathieu', 'Eve'], ['3', '1']);
$topaz = new Person('.item/francois/topaz.PNG', 108, 'Topaz', 'CLient GTS', ['Mathieu', 'Eve'], ['1', '1']);
$clorox = new Person('.item/francois/clorox.PNG', 108, 'Clorox', 'Client GTS', ['Pierre', 'Mathieu', 'Eve'], ['3', '3', '1']);

#PAUL

#tableau contenant les personnes
$tabPersonJohan = array($patrick, $olege, $johan, $charles, $caroline, $gabriel, $yoann, $herve, $nabil, $groupe, $balibaris, $entuitae);
$tabPersonFrancois = array($nicolas, $emeline, $charlie, $mateo, $pierre, $mathieu, $francois $ $camille, $eve, $marc $technip, $topaz, $clorox);
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
