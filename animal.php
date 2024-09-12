<?php
namespace animal;

class Animal
{
    public string $nom;

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function dort()
    {
        echo "ZZZzzzzzzz";
    }

}

// trait Canides
// {
//     public function aboie()
//     {
//         echo "Wouuffff";
//     }
// }

trait Felin
{
    public function miaule()
    {
        echo 'Miaouu Miaouuu';

    }
}

interface CriAnimalInterface
{
    public function cri();

}
