<?php

class Personnage{
    

    /// PUBLIC ///
    public $vie = 80;
    public $atk = 20;  
    public $name;

    // Attribuer valeur directement en arguments avec un constructeur
    public function __construct($name)
    {
        $this->name = $name;
    }

    /// PRIVATE ///
    // private $name
    /*
    public function getName()
    {
        return $this->name;
    }
    */

    /// DIE ///
    // Savoir si le personnage est mort
    public function die()
    {
        return $this->vie <= 0;
    }
    

    /// REGENERATE ///
    
    // Vie a 80pv 
    public function regenerate($vie = null)
    {
        //  Regenerer la vie a 100pv
        //  $this->vie = 100;


        // On fait passer en parametre les point de vie qu'on veut regenerer
        if(is_null($vie))
        {
            $this->vie = 100;
        } 
        else 
        {
            $this->vie += $vie;
        }
    }

    /*
    public function crier(){

        echo 'Tahiiiiiooooo';
    }
    */

    /// ATTAQUE ///

    public function fight(/* Personnage qu'on attaque */$cible)
    {
        // $this = Attaquant
        // $cible = Defensseur

        $cible->vie -= $this->atk;
    }
}