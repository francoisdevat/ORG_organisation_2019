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
$patrick = new Person('./items/johan/pat.PNG', 100, 'Patrick', 'Directeur', ['Caroline', 'Nabil', 'Gabriel'], ['6', '6', '3']);
$olege = new Person('./items/johan/olege.PNG', 101, 'Olege', 'Technicien', ['Charles', 'Gabriel', 'Yoann'], ['6', '6', '6']);
$johan = new Person('./items/johan/johan.PNG', 102, 'Johan', 'Stagiaire admin systeme', ['Gabriel'], ['6']);
$charles = new Person('./items/johan/charles.PNG', 103, 'Charles', 'Technicien', ['Olege', 'Gabriel', 'Yoann'], ['6', '6', '6']);
$caroline = new Person('./items/johan/caroline.PNG', 104, 'Caroline', 'Secretaire', ['Olege', 'Gabriel', 'Yoann'], ['1', '1', '1']);
$gabriel = new Person('./items/johan/gabriel.PNG', 105, 'Gabriel', 'admin systeme', ['Olege', 'Gabriel', 'Yoann'], ['6', '6', '6']);
$yoann = new Person('./items/johan/yoan.PNG', 106, 'Yoann', 'Technicien', ['Olege', 'Gabriel', 'Yoann'], ['1', '1', '3']);
$herve = new Person('./items/johan/herve.PNG', 107, 'Herve', 'Ingenieure Cloud', ['Olege', 'Gabriel', 'Yoann'], ['1', '3', '3']);
$nabil = new Person('./items/johan/nabil.PNG', 108, 'Nabil', 'Ingenieure affaire', ['Patrick'], ['6']);
$groupe = new Person('./items/johan/groupe.jpg', 108, 'Groupe Rouge', 'Client SI2S', ['Olege', 'Gabriel', 'Yoann'], ['3', '3', '3']);
$balibaris = new Person('./items/johan/balibaris.jpg', 108, 'Balibaris', 'Client SI2S', ['Olege', 'Gabriel', 'Yoann'], ['3', '3', '3']);
$entuitae = new Person('./items/johan/intuitae.jpg', 108, 'Intuitae', 'Client SI2S', ['Olege', 'Gabriel', 'Yoann'], ['3', '3', '3']);

#FRANCOIS
$jean = new Person('./items/francois/jean.PNG', 100, 'Jean', 'Directeur', ['Emeline', 'Charlie', 'Pierre', 'Mathieu', 'Eve'], ['3', '3', '3', '3', '6']);
$emeline = new Person('./items/francois/emeline.PNG', 101, 'Emeline', 'Ingenieure', ['Nicolas', 'Francois', 'Marc'], ['3', '6', '6']);
$francois = new Person('./items/francois/francois.PNG', 102, 'Francois', 'Stagiaire', ['Emeline', 'Marc'], ['6', '6']);
$marc = new Person('./items/francois/marc.PNG', 103, 'Marc', 'Technicien', ['Emeline', 'Francois'], ['6', '6']);
$charlie = new Person('./items/francois/charlie.PNG', 104, 'Charlie', 'Ingenieure', ['Nicolas', 'Camille', 'Mateo'], ['3', '6', '6']);
$camille = new Person('./items/francois/camille.PNG',105, 'Camille', 'Stagiaire', ['Charlie', 'Mateo'], ['6', '6']);
$mateo = new Person('.items/francois/mateo.PNG', 106, 'Mateo', 'Technicien', ['Camille', 'Chalie'], ['6', '6']);
$pierre = new Person('.items/francois/pierre.PNG', 107, 'Pierre', 'Technicien', ['Nicolas', 'Clorox'], ['3', '3']);
$mathieu = new Person('.items/francois/mathieu.PNG', 108, 'Mathieu', 'RelClient', ['Clorox', 'Nicolas', 'Technip', 'Topaz'], ['3', '3', '3', '1']);
$eve = new Person('.items/francois/eve.PNG', 108, 'Eve', 'Secretaire', ['Nicolas', 'Technip', 'Clorox', 'Topaz'], ['6', '1', '1', '1']);
$technip = new Person('.items/francois/technip.PNG', 108, 'Technip','Client GTS', ['Mathieu', 'Eve'], ['3', '1']);
$topaz = new Person('.items/francois/topaz.PNG', 108, 'Topaz', 'CLient GTS', ['Mathieu', 'Eve'], ['1', '1']);
$clorox = new Person('.items/francois/clorox.PNG', 108, 'Clorox', 'Client GTS', ['Pierre', 'Mathieu', 'Eve'], ['3', '3', '1']);

#PAUL
$olivierS = new Person('./items/paul/olivierS.JFIF', 101, 'OlivierS', 'DG', ['JeanGuy', 'Alexandre', 'Katia', 'JeanChristophe', 'OlivierK', 'Murielle'], ['6', '3', '3', '3', '3', '3']);
$jeanGuy = new Person('./items/paul/jeanGuy.JFIF', 101, 'JeanGuy', 'D_adj', ['OlivierS', 'Alexandre', 'Katia', 'JeanChristophe', 'OlivierK', 'Murielle'], ['6', '3', '3', '3', '3', '3']);

$jeanChristophe = new Person('./items/paul/jeanChristophe.PNG', 101, 'JeanChristophe', 'DSI', ['OlivierS', 'Mohamed', 'GuillaumeT', 'Julie'], ['3', '6', '6', '6']);
$mohamed = new Person('./items/paul/mohamed.JFIF', 101, 'Mohamed', 'DSI_adj', ['Paul', 'Jerome', 'Matthieu', 'Julie'], ['3', '6', '6', '6']);
$guillaumeT = new Person('./items/paul/guillaumeT.JPG', 101, 'GuillaumeT', 'Chef_Proj', ['GuillaumeT', 'Jerome', 'Matthieu', 'Julie'], ['3', '6', '6', '6']);
$nicolas = new Person('./items/paul/nicolas.JFIF', 101, 'Nicolas', 'Alternant', ['Paul', 'Jerome', 'Matthieu', 'Julie'], ['3', '6', '6', '6']);
$jerome = new Person('./items/paul/jerome.PNG', 101, 'Jerome', 'MOA', ['Paul', 'Nicolas', 'Matthieu', 'Julie'], ['3', '6', '6', '6']);
$matthieu = new Person('./items/paul/matthieu.PNG', 101, 'Matthieu', 'MOA', ['Paul', 'Jerome', 'Nicolas', 'Julie'], ['3', '6', '6', '6']);
$julie = new Person('./items/paul/julie.PNG', 101, 'Julie', 'AMOA', ['Paul', 'Jerome', 'Matthieu', 'Nicolas'], ['3', '6', '6', '6']);

$olivierK = new Person('./items/paul/olivierK.JFIF', 101, 'OlivierK', 'DJ', ['Paul', 'Jerome', 'Matthieu', 'Julie'], ['3', '6', '6', '6']);

$alexandre = new Person('./items/paul/alexandre.JFIF', 101, 'Alexandre', 'DF', ['Paul', 'Jerome', 'Matthieu', 'Julie'], ['3', '6', '6', '6']);
$hadrien = new Person('./items/paul/hadrien.JFIF', 101, 'Hadrien', 'DF', ['Paul', 'Jerome', 'Matthieu', 'Julie'], ['3', '6', '6', '6']);
$veralda = new Person('./items/paul/veralda.JFIF', 101, 'Veralda', 'DF', ['Paul', 'Jerome', 'Matthieu', 'Julie'], ['3', '6', '6', '6']);

$murielle = new Person('./items/paul/murielle.PNG', 101, 'Murielle', 'DRH', ['Paul', 'Jerome', 'Matthieu', 'Julie'], ['3', '6', '6', '6']);

$katia = new Person('./items/paul/katia.JFIF', 101, 'Katia', 'DC', ['OlivierS', 'Jerome', 'Matthieu', 'Julie'], ['3', '6', '6', '6']);
$elodie = new Person('./items/paul/elodie.JFIF', 101, 'Elodie', 'Alternant', ['Katia', 'Sidney'], ['6', '6']);
$sidney = new Person('./items/paul/sidney.JPG', 101, 'Sidney', 'Alternant', ['Katia', 'Elodie'], ['6', '6']);

#tableau contenant les personnes
$tabPersonJohan = array($patrick, $olege, $johan, $charles, $caroline, $gabriel, $yoann, $herve, $nabil, $groupe, $balibaris, $entuitae);
$tabPersonFrancois = array($jean, $emeline, $charlie, $mateo, $pierre, $mathieu, $francois, $camille, $eve, $marc, $technip, $topaz, $clorox);
$tabPersonPaul = array($olivierS, $jeanGuy, $jeanChristophe, $mohamed, $guillaumeT, $nicolas, $jerome, $matthieu, $julie, 
$olivierK, $alexandre, $hadrien, $veralda, $murielle, $katia, $sidney, $elodie);

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
	//echo'<div id="div1" style="top:'.$y.'; left:'.$x.';  position:absolute;"> <img style="width: 80px; height: 80px;" src="'.$tabPersonJohan[$i]->photo.'" alt="patrick"/> <h3>'.$tabPersonJohan[$i]->prenom.'  '.$tabPersonJohan[$i]->fonction.'</h3></div> ';
}

for ($i = 0; $i < count($tabPersonJohan); $i++) {
	for ($j = 0; $j < count($tabPersonJohan[$i]->buddys); $j++) {
		for ($k = 0; $k < count($tabPersonJohan); $k++) {
			if ($tabPersonJohan[$i]->buddys[$j] == $tabPersonJohan[$k]->prenom) {
				//echo'<div id="div1" style="top:'.$coords[$i][1].'; left:'.$coords[$i][0].';  position:absolute;"> <img style="width: 80px; height: 80px;" src="'.$tabPersonJohan[$i]->photo.'" alt="patrick"/> <h3>'.$tabPersonJohan[$i]->prenom.'  '.$tabPersonJohan[$i]->fonction.'</h3></div> ';
				echo'
					<div id="div1" style="top:'.$coords[$i][1].'; left:'.$coords[$i][0].';  position:absolute;"> <img style="width: 80px; height: 80px;" src="'.$tabPersonJohan[$i]->photo.'" alt="patrick"/> <h3>'.$tabPersonJohan[$i]->prenom.'  '.$tabPersonJohan[$i]->fonction.'</h3></div>;
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

$coords = [];

for ($theta_variable = $theta_min, $i = 0; $theta_variable < $theta_max; $theta_variable = $theta_variable + (($theta_max) / (count($tabPersonFrancois))), $i++)
{
	$x = $x_start + 2 * $x_start + $r * cos($theta_variable);
	$y = $y_start + $r * sin($theta_variable);

	array_push($coords,[$x, $y]);
	//echo'<div id="div1" style="top:'.$y.'; left:'.$x.';  position:absolute;"> <img style="width: 80px; height: 80px;" src="'.$tabPersonFrancois[$i]->photo.'" alt="patrick"/> <h3>'.$tabPersonFrancois[$i]->prenom.'  '.$tabPersonFrancois[$i]->fonction.'</h3></div> ';
}

for ($i = 0; $i < count($tabPersonFrancois); $i++) {
	for ($j = 0; $j < count($tabPersonFrancois[$i]->buddys); $j++) {
		for ($k = 0; $k < count($tabPersonFrancois); $k++) {
			if ($tabPersonFrancois[$i]->buddys[$j] == $tabPersonFrancois[$k]->prenom) {
				//echo'<div id="div1" style="top:'.$coords[$i][1].'; left:'.$coords[$i][0].';  position:absolute;"> <img style="width: 80px; height: 80px;" src="'.$tabPersonFrancois[$i]->photo.'" alt="patrick"/> <h3>'.$tabPersonFrancois[$i]->prenom.'  '.$tabPersonFrancois[$i]->fonction.'</h3></div> ';
				echo'
					<div id="div1" style="top:'.$coords[$i][1].'; left:'.$coords[$i][0].';  position:absolute;"> <img style="width: 80px; height: 80px;" src="'.$tabPersonFrancois[$i]->photo.'" alt="patrick"/> <h3>'.$tabPersonFrancois[$i]->prenom.'  '.$tabPersonFrancois[$i]->fonction.'</h3></div>;
					<div id="div2" style="position:absolute">
					<svg width="500000" height="50000000">
						<line x1="'.$coords[$k][0].'" y1="'.$coords[$k][1].'" x2="'.$coords[$i][0].'" y2="'.$coords[$i][1].'" style="stroke:rgb(255,0,0);
						stroke-width:'.$tabPersonFrancois[$i]->frequency[$j].'" />
					</svg>
					</div>';
			}
		}
	}
}

$coords = [];

for ($theta_variable = $theta_min, $i = 0; $theta_variable < $theta_max; $theta_variable = $theta_variable + (($theta_max) / (count($tabPersonPaul))), $i++)
{
	$x = $x_start + 4 * $x_start + $r * cos($theta_variable);
	$y = $y_start + $r * sin($theta_variable);

	array_push($coords,[$x, $y]);
	//echo'<div id="div1" style="top:'.$y.'; left:'.$x.';  position:absolute;"> <img style="width: 80px; height: 80px;" src="'.$tabPersonPaul[$i]->photo.'" alt="patrick"/> <h3>'.$tabPersonPaul[$i]->prenom.'  '.$tabPersonPaul[$i]->fonction.'</h3></div> ';
}

for ($i = 0; $i < count($tabPersonPaul); $i++) {
	for ($j = 0; $j < count($tabPersonPaul[$i]->buddys); $j++) {
		for ($k = 0; $k < count($tabPersonPaul); $k++) {
			if ($tabPersonPaul[$i]->buddys[$j] == $tabPersonPaul[$k]->prenom) {
				//echo'<div id="div1" style="top:'.$coords[$i][1].'; left:'.$coords[$i][0].';  position:absolute;"> <img style="width: 80px; height: 80px;" src="'.$tabPersonPaul[$i]->photo.'" alt="patrick"/> <h3>'.$tabPersonPaul[$i]->prenom.'  '.$tabPersonPaul[$i]->fonction.'</h3></div> ';
				echo'
					<div id="div1" style="top:'.$coords[$i][1].'; left:'.$coords[$i][0].';  position:absolute;"> <img style="width: 80px; height: 80px;" src="'.$tabPersonPaul[$i]->photo.'" alt="patrick"/> <h3>'.$tabPersonPaul[$i]->prenom.'  '.$tabPersonPaul[$i]->fonction.'</h3></div>;
					<div id="div2" style="position:absolute">
					<svg width="500000" height="50000000">
						<line x1="'.$coords[$k][0].'" y1="'.$coords[$k][1].'" x2="'.$coords[$i][0].'" y2="'.$coords[$i][1].'" style="stroke:rgb(255,0,0);
						stroke-width:'.$tabPersonPaul[$i]->frequency[$j].'" />
					</svg>
					</div>';
			}
		}
	}
}
?>
