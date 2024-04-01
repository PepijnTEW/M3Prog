<?php

/**
 *  Deze code rekent uit bepaalde afstanden kosten met de auto en het vliegtuig
 *  ook rekent deze code makkelijke dingen uit zoals basis rekenen
 */
// a function that adds ints
function add($getal1, $getal2)
{
    $add = $getal1 + $getal2;
    return $add;
}
// a function that subtracts ints
function subtract($getal1, $getal2)
{
    $sub = $getal1 - $getal2;
    return $sub;
}
// a function that devides ints
function devide($getal1, $getal2)
{
    $dev = $getal1 / $getal2;
    return $dev;
}
// a function that multiplys ints
function multiply($getal1, $getal2)
{
    $mul = $getal1 * $getal2;
    return $mul;
}


function berekenRitKosten($afstand_km, $km_per_liter, $liter_prijs)
{
    $aantal_liters = $afstand_km / $km_per_liter;

    $kosten_euro = $aantal_liters * $liter_prijs;

    return $kosten_euro;
}

function berekenRitKostenVliegtuig($afstand_km, $liter_prijs, $kilo_bagage, $business_class)
{

    $kosten_rit = ($liter_prijs * $afstand_km) / 30;
    $rounded_kilos = round($kilo_bagage, 0, PHP_ROUND_HALF_DOWN);
    $kosten_bagage = $rounded_kilos * 5;
    $kosten_totaal = $kosten_bagage + $kosten_rit;
    if ($business_class === true) {
        $kosten_totaal = $kosten_totaal * 1.5;
    }
    return $kosten_totaal;
}
