### strtoupper
De documentatie van [strtoupper](https://www.php.net/manual/en/function.strtoupper)
> strtoupper wordt gebruikt om een string "uppercase te maken"
``` <?php
$str = "Mary Had A Little Lamb and She LOVED It So";
$str = strtoupper($str);
echo $str; // Prints MARY HAD A LITTLE LAMB AND SHE LOVED IT SO
?>
```
### strpos
De documentatie van [strpos](https://www.php.net/manual/en/function.strpos.php)
> Vind de eerste positie van een string wanneer hij gebruikt wordt"
``` <?php
$mystring = 'abc';
$findme   = 'a';
$pos = strpos($mystring, $findme);

// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}
?>
```
### file_exists
De documentatie van [file_exists](https://www.php.net/manual/en/function.file-exists.php)
> Checkt of een bestand of een directory wel bestaat"
``` <?php
$filename = '/path/to/foo.txt';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}
?>
```