<?php
// includes the functions script
include_once 'functions.php';
$rijsKostenArray = [];
$rijsKostenArray['a'] = berekenRitKostenVliegtuig(3722, 2.05, 20, false);
$rijsKostenArray['b'] = berekenRitKostenVliegtuig(9276,3.11, 10, false);
$rijsKostenArray['c'] = berekenRitKostenVliegtuig(803, 2.83, 0, true);
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
    <p>De vliegreis van 3722 km kost <?=$rijsKostenArray['a']?></p>
    <p>De vliegreis van 9276 km kost <?=$rijsKostenArray['b']?></p>
    <p>De vliegreis van 803 km kost <?=$rijsKostenArray['c']?></p>
</body>
</html>