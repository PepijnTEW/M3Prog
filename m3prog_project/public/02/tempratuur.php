<?php
// Fahrenheit naar Celsius
$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br>";

// Celsius naar Farhenheit
$celsius = 21;
$fahrenheit = ($celsius * 1.8) + 32;
echo "{$celsius} graden Celsius = {$fahrenheit} graden Farhenheit. <br>";

// Celsius naar Kelvin
$kelvin = $celsius + 273.15;
echo "{$celsius} graden Celsius = {$kelvin} graden Kelvin. <br>";

// Farhenheit naar Kelvin
$kelvin = ($fahrenheit - 32) * 5/9 + 273.15;
echo "{$fahrenheit} graden Fahrenheit = {$kelvin} graden Kelvin. <br>";