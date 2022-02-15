<!-- 
Snack C
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
-->

<?php

$numbers = [];

for($i = 0; $i < 15; $i++){
    $randomNum = rand(1, 30);
    
    
    if(!in_array($randomNum, $numbers)){
        $numbers = $randomNum;
    }
    echo "<br>$numbers";
}


?>