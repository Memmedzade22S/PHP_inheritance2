<?php
include 'dog.php';
include 'cat.php';

$it = new Dog("Rex");
$pisik = new Cat("Mestan");

echo $it->seseVer() . "<br>";
echo $it->elaveFunksiya() . "<br>";

echo $pisik->seseVer() . "<br>";
echo $pisik->elaveFunksiya() . "<br>";