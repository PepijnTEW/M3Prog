<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $namen = ["Guts","Takumi","Thorfinn","Walter White","Jesse Pinkman"];
        //print_r($namen);
        //sort($namen);
        //foreach($namen as $namen){
		//    echo $namen . "<br>";
		//}

        array_push($namen,"damaris");
        $namen[] = "pepijn";
        //print_r($namen);

        $namen_tekst_imp = implode("<br>", $namen);
        print_r($namen_tekst_imp);
        $namen_tekst_exp = explode("<br>", $namen_tekst_imp);
        print_r($namen_tekst_exp);

    ?>
</body>
</html>