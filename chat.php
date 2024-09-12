<?php
namespace chat;

use animal\Felin;

include_once 'animal.php';

// La class Chat hérite (extends) de la class Animal provenant du fichier animal.php (namesapce animal)
class Chat extends \animal\Animal

{
    use Felin;
}
