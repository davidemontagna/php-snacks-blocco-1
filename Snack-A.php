<!-- 
Snack A
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
-->

<?php

$matches = [
    [
        "homeName" => "Virtus Segafredo Bologna",
        "homePoints" => "79",
        "awayName" => "Vanoli Basket Cremona",
        "awayPoints" => "71",
    ],
    [
        "homeName" => "A|X Armani Exchange Milano",
        "homePoints" => "74",
        "awayName" => "Fortitudo Kigili Bologna",
        "awayPoints" => "64",
    ],
    [
        "homeName" => "Umana Reyer Venezia",
        "homePoints" => "82",
        "awayName" => "Germani Brescia",
        "awayPoints" => "93",
    ],
    [
        "homeName" => "Banco di Sardegna Sassari",
        "homePoints" => "102",
        "awayName" => "Happy Casa Brindisi",
        "awayPoints" => "75",
    ],
];

for($index = 0; $index < count($matches); $index++){
    $teamHome = $matches[$index]["homeName"];
    $ptHome = $matches[$index]["homePoints"];
    $teamAway = $matches[$index]["awayName"];
    $ptAway = $matches[$index]["awayPoints"];

    echo "<br>$teamHome - $teamAway | $ptHome-$ptAway<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>   
    
</body>
</html>