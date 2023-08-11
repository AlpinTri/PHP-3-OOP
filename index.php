<?php
require './animal.php';
require './Frog.php';
require './Ape.php';

$sheep = new Animal("shaun");

echo "Name: {$sheep->get_name()} <br>";
echo "legs: {$sheep->get_legs()} <br>";
echo "cold blooded: {$sheep->get_cold_blooded()} <br>";
echo "<br>";

$sungokong = new Ape("kera sakti");

echo "Name: {$sungokong->get_name()} <br>";
echo "legs: {$sungokong->get_legs()} <br>";
echo "Yell: {$sungokong->yell()} <br>";
echo "<br>";

$kodok = new Frog("buduk");

echo "Name: {$kodok->get_name()} <br>";
echo "legs: {$kodok->get_legs()} <br>";
echo "Jump: {$kodok->jump()} <br>";
?>