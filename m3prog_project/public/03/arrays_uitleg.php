<?php

$autos = ["corolla", "celica", "lancer evo", "190w touring", "honda civic", "quattro sport", "mini cooper"];
//print_r($autos);
echo count ($autos);
array_push( $autos,"nog een auto");
print_r($autos);
echo implode('   ', $autos);
//var_dump($autos);
?>