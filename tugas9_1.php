<?php
$tempA = 0;
$tempB = 0;
for($i=0; $i <= 21; $i++){
    if ($i == 0){
        echo $i." ";
        $tempA = $i;
    } elseif ($i == 1){
        echo $i." ";
        $tempB = $i;
    } else {
        $tempC = $tempA + $tempB;
        echo $tempC ." ";
        $tempA = $tempB;
        $tempB = $tempC;
    }
}
?>