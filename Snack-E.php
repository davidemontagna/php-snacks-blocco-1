<!--
Snack E
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->

<?php

$students = [
    [
        "name" => "Marco",
        "surname" => "Verdi",
        "votes" => [
            7,
            5,
            8,
            6,
        ]
    ],
    [
        "name" => "Davide",
        "surname" => "Rossini",
        "votes" => [
            8,
            6,
            6,
            6,
        ]
    ],
    [
        "name" => "Giacomo",
        "surname" => "Peruzzi",
        "votes" => [
            7,
            7,
            8,
            9,
        ]
    ],
];


$average = [];

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
    <?php
        for($index = 0; $index < count($students); $index++){
            echo  "<br>Nome: ".$students[$index]["name"]."<br>"; 
            echo  "<br>Cognome: ".$students[$index]["surname"]."<br>";
            echo  "<br>Media Voto: ".$average[] += array_sum($students[$index]["votes"]) / count($students[$index]["votes"])."<br>";
            
            
        }
        
    ?>
</body>
</html>