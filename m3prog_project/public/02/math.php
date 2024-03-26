<?php
$digit = 2.68532;
$rounded1 = ceil($digit);
echo "$rounded1 \r\n";
$digit2 = 1334.44235;
$rounded2 = floor($digit2);
echo "$rounded2 \r\n";


$array=[];
for ($i = 0; $i < 3; $i++) {
    $random = random_int(0, 10);
    echo "$random \r\n";
    array_push($array, $random);
}
$arrayPlus = $array[0]+$array[1]+$array[2];
echo $arrayPlus;