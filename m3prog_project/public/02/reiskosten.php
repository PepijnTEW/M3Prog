<?php

$afstandBordeaux = 1085.73;
$benzine = 1.89;
$trein = 60;
$tankInhoud = 50;

$litersUsed = $afstandBordeaux / 15;
$tanken = ceil($litersUsed / $tankInhoud);
$auto = $litersUsed * $benzine;

if ($auto > $trein){
    echo"Ik ga met de trein.";
}else{
    echo"Ik ga met de auto";
}