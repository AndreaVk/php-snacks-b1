
<?php
$group = [
    [
        "squadraCasa" => "Olimpia Milano",
        "squadraOspite" => "Cantù",
        "puntiCasa" => 88,
        "puntiOspite" => 72,
    ],
    [
        "squadraCasa" => "Varese",
        "squadraOspite" => "Reyer Venezia",
        "puntiCasa" =>69 ,
        "puntiOspite" => 80,
    ],
    [
        "squadraCasa" => "Treviso",
        "squadraOspite" => "Virtus Bologna",
        "puntiCasa" => 70,
        "puntiOspite" => 74,
    ],
    [
        "squadraCasa" => "Virtus Roma",
        "squadraOspite" => "V.L. Pesaro",
        "puntiCasa" => 62,
        "puntiOspite" => 59,
    ],
    [
        "squadraCasa" => "Teramo Basket",
        "squadraOspite" => "Roseto Basket",
        "puntiCasa" => 88,
        "puntiOspite" => 87,
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket</title>
</head>
<body>
    <h1>Risultati delle Partite</h1>
    <ul>
    <?php
        for($i=0; $i < count($group); $i++){
            echo "<li>{$group[$i]["squadraCasa"]} - {$group[$i]["squadraOspite"]}  {$group[$i]["puntiCasa"]} - {$group[$i]["puntiOspite"]}</li>";
        }
    ?>
    </ul>
    
</body>
</html>