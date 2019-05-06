<?php


class Personnage
{
    private $vie;
    private $atk;
    private $name;

    public function getVie()
    {
        return $this->vie;
    }

    public function setVie($vie)
    {
        $this->vie = $vie;
    }

    public function getAtk()
    {
        return $this->atk;
    }

    public function setAtk($atk)
    {
        $this->atk = $atk;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


}