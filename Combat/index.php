<?php

require 'personnage.class.php';

$perso1 = new Personnage(/* Donner une valeur avec un argument*/"Merlin");
//  Donner une valeur
//  $perso1->name = "Merlin";


$perso2 = new Personnage(/* Donner une valeur avec un argument*/"Harry");
//  Donner une valeur
//  $perso2->name = "Harry";
$perso2->vie = 20;


/// METHODE ET ATTRIBUT ///

//  Dump '->' appeller une methode ou un attribut
    // Attribut
    // var_dump($perso1->vie);
    // var_dump($perso1->atk);

    // Methode
    // var_dump($perso1->crier());


/// REGENERATE ////

//  Utilisation de la methode regenerate() en faisant passer l'argument dans regenerate()
//  $perso1->regenerate(5);

//  Utilisation de la methode regenerate()
//  $perso1->regenerate();


/// DIE ///

//  Avec la mathode die() si la vie est a 0(donc mort), le return donnera true sinon false
//  var_dump($perso1->die());


/// ATTAQUE ///

$perso1->fight($perso2);

if($perso2->die())
{
    echo 'Harry est mort';
}


//  Dump des valeurs du personnage 
    var_dump($perso1);
    var_dump($perso2);

?>