<?php 
namespace App\Services;

use App\Entity\Hero;

class HeroService
{
    private $_listeHeros = [];

    function __construct()
    {
        $this->addHero(new Hero('Harley','MacKenzy','Harley Queen',true,'une psychiatre reconvertie en psychotique'));
        $this->addHero(new Hero('Brice','Wayne','Batman',false,'une chauve souris avec une grosse super car'));
        $this->addHero(new Hero('Clark','Kent','Kent',false,'un extra-terrestre louche et journaliste'));
        $this->addHero(new Hero('Diana','Prince','Wonderwoman',false,'une amazonienne qui roske du poney'));
    }
    function getList()
    {
        return $this->_listeHeros;
    }
    function addHero($pHero)
    {
        array_push($_listeHeros,$pHero);
    }
}