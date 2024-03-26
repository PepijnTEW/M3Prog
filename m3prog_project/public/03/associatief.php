<?php
// Associative array
$verbruik = ['Koffiezetapparaat' => 85, 'Wasdroger' => 170, 'Wasmachine' => 220, 'Cv-ketel' => 1200, 'Vaatwasser' => 150];
$totaal = 0;
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
    <?php
    foreach($verbruik as $key => $value){
        // array in html
        echo $key . " = " . $value . " Kwh</br>";
        // De kwh bij elkaar optellen
        $totaal = $totaal + $value;
    }
    ?>
    <h1>In totaal gebruikt dit <?=$totaal?> Kwh</h1>
</body>
</html>