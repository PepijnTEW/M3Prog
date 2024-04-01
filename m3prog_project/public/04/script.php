<?php
// includes the functions script
include_once 'functions.php';
echo add(10,5),"<br>";
echo subtract(10,5),"<br>";
echo devide(10,5),"<br>";
echo multiply(10,5),"<br>";

$rijsKostenArray = [];
$rijsKostenArray['a'] = berekenRitKosten(663, 15, 1.9);
$rijsKostenArray['b'] = berekenRitKosten(1438, 20, 1.46);
$rijsKostenArray['c'] = berekenRitKosten(1991, 18.47, 2.23);
foreach($rijsKostenArray as $key => $val)
{
    $rijsKostenArray[$key] = number_format($val,2,',');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
</head>
<body>
    <p>De kosten van de rit naar belijn zijn <?=$rijsKostenArray['a']?></p>
    <p>De kosten van de rit naar stockholm zijn <?=$rijsKostenArray['b']?></p>
    <p>De kosten van de rit naar kiev zijn <?=$rijsKostenArray['c']?></p>
</body>
</html>