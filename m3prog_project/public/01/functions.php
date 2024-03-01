<?php

//strtoupper
$lowerstr = "deze tekst is lowercase maar wordt zo uppercase";
$upperstr = strtoupper($lowerstr);
echo $upperstr; // nu is de tekst in de lowercase string uppercase geworden.

//strpos ik wil nu de positie van het woord "lowercase" in de uppercase string vinden
$vindmij = 'lowercase';
$pos = strpos($lowerstr, $vindmij);
if ($pos === false){
    echo " The string $vindmij was not found in the string $lowerstr";
} else {
    echo " the string $vindmij was found in the string $lowerstr";
    echo " and exists at position $pos";
}

//hier ga kijk kijken of het bestand functions.md wel in mijn direcotory bestaat
$bestandsnaam = 'functions.md';
if (file_exists($bestandsnaam)){
    echo " Het bestand: $bestandsnaam bestaat.";
} else {
    echo " Het bestand; $bestandsnaam bestaat niet.";
}
?>
