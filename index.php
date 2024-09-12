<?php
include 'chien.php';
include 'chat.php';

$monChien = new \chien\Chien();
$monChien->cri();
echo "<br>";
$monChien->dort();
echo "<br>";
echo "<br>";

$monChat = new \chat\Chat();
$monChat->miaule();
echo "<br>";
$monChat->dort();
echo "<br>";
echo "<br>";
