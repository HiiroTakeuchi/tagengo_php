<?php
require("momo.php");
require("ichigo.php");

$Momo =  new momo;
$Ichigo = new ichigo;

$Momo->ReturnPrice();
$Momo->ReturnAverage();
$Momo->ReturnMaxMinPrice();

echo "<br><br>";

$Ichigo->ReturnPrice();
$Ichigo->ReturnAverage();
$Ichigo->ReturnMaxMinPrice();