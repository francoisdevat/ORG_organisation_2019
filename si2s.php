<?php

class Person
{
	

	public $photo;
	public $id_photo;
	public $prenom;
	public $fonction;
	
	public function __construct( $photo, $id_photo, $prenom, $fonction)  #Constructeur crée une personne avec ca photo, son nom... 
	{
			$this->photo = $photo;
			$this->id_photo = $id_photo;
			$this->prenom = $prenom;
			$this->fonction = $fonction;


	}
}

# Création des differentes Personnes via le Construteur 
$patrick = new Person('pat.PNG', 100, 'Patrick', 'Directeur');
$olege = new Person('olege.PNG', 101, 'Olege', 'Technicien');
$johan = new Person('johan.PNG', 102, 'Johan', 'Stagiaire');
$charles = new Person('charles.PNG', 103, 'Charles', 'Technicien');
$caroline = new Person('caroline.PNG', 104, 'Caroline', 'Secretaire');
$gabriel = new Person('gabriel.PNG', 105, 'Gabriel', 'Ingenieure');
$yoann = new Person('yoan.PNG', 106, 'Yoann', 'Technicien');
$herve = new Person('herve.PNG', 107, 'Herve', 'Ingenieure');
$nabil = new Person('nabil.PNG', 108, 'Nabil', 'Ingenieure');
$groupe = new Person('groupe.jpg', 108, 'Groupe Rouge', 'Client SI2S');
$balibaris = new Person('balibaris.jpg', 108, 'Balibaris', 'Client SI2S');
$intuitae = new Person('intuitae.jpg', 108, 'Intuitae', 'Client SI2S');

#tableau contenant les personnes
$tabPerson = array( $patrick, $olege, $johan, $charles, $caroline, $gabriel,$yoann, $herve, $nabil, $groupe, $balibaris, $intuitae );

#Création d'un cercle pour afficher les personnes

$theta_min = 0;
$theta_max = count($tabPerson) - 1;

$r = 330;

for( $i = $theta_min; $i <= $theta_max; $i++)
{
	
        $x = 370 + $r * cos($i);
        $y = 850 + $r * sin($i);
       
        echo'<div id="div1" style="top:'.$x.'; left:'.$y.';  position:absolute;"> <img style="width: 80px; height: 8
        0px;" src="'.$tabPerson[$i]->photo.'" alt="patrick"/> <h3>'.$tabPerson[$i]->prenom.'  '.$tabPerson[$i]->fonction.'</h3></div> ';      
}

?>

