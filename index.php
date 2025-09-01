<?php
include 'It.php';
include 'Pisik.php';

$it = new It("Rex");
$pisik = new Pisik("Mestan");

echo $it->seseVer() . "<br>";
echo $it->elaveFunksiya() . "<br>";

echo $pisik->seseVer() . "<br>";
echo $pisik->elaveFunksiya() . "<br>";