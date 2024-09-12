<?php
namespace chien;

include_once 'animal.php';

// La class Chien hérite (extends) de la class Animal provenant du namesapce animal présent dans fichier animal.php et implémente (implements)
// l'Interface CrianimalInterface provenant du namesapce animal présent dans fichier animal.php
// important : en PHP l'implémentation se fait toujours après l'héritage de la classe

class Chien extends \animal\Animal implements \animal\CriAnimalInterface

{
    // use Canides;
    public function cri()
    {
        echo "Wouaf Wouaf";
    }

}
