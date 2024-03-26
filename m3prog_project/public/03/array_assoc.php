<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $temprature = ['Maandag' => 15, 'Dinsdag' => 14, 'Woensdag' => 34, 'Donderdag' => 4, 'Vrijdag' => 21, 'Zaterdag' => 41, 'Zondag' => 1];
    ?>
    <table>
        <tr>
            <td>Dagen</td>
            <td>Graden</td>
        </tr>
        <tr>
            <td>Maandag</td>
            <td><?=$temprature['Maandag']?></td>
        </tr>
        <tr>
            <td>Dindsdag</td>
            <td><?=$temprature['Dinsdag']?></td>
        </tr>
        <tr>
            <td>Woensdag</td>
            <td><?=$temprature['Woensdag']?></td>
        </tr>
        <tr>
            <td>Donderdag</td>
            <td><?=$temprature['Donderdag']?></td>
        </tr>
        <tr>
            <td>Vrijdag</td>
            <td><?=$temprature['Vrijdag']?></td>
        </tr>
        <tr>
            <td>Zaterdag</td>
            <td><?=$temprature['Zaterdag']?></td>
        </tr>
        <tr>
            <td>Zondag</td>
            <td><?=$temprature['Zondag']?></td>
        </tr>
    </table>

    <?php $vandaag = "Maandag"; ?>
    <p>Vandaag <?=$vandaag?> is het <?=$temprature[$vandaag]?> graden</p>
    <?php $vandaag = "Dinsdag"; ?>
    <p>Vandaag <?=$vandaag?> is het <?=$temprature[$vandaag]?> graden</p>
    <?php $vandaag = "Woensdag"; ?>
    <p>Vandaag <?=$vandaag?> is het <?=$temprature[$vandaag]?> graden</p>
    <?php $vandaag = "Donderdag"; ?>
    <p>Vandaag <?=$vandaag?> is het <?=$temprature[$vandaag]?> graden</p>
    <?php $vandaag = "Vrijdag"; ?>
    <p>Vandaag <?=$vandaag?> is het <?=$temprature[$vandaag]?> graden</p>
    <?php $vandaag = "Zaterdag"; ?>
    <p>Vandaag <?=$vandaag?> is het <?=$temprature[$vandaag]?> graden</p>
    <?php $vandaag = "Zondag"; ?>
    <p>Vandaag <?=$vandaag?> is het <?=$temprature[$vandaag]?> graden</p>
</body>
</html>