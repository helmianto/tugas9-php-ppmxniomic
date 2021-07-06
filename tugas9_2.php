<?php

for($i=1; $i <= 200; $i++){
    $cekJumlahPembagi = 0;
    for ($j=1; $j<=$i; $j++){
        if ($i % $j == 0){
            $cekJumlahPembagi++;
        } 
    }
    if ($cekJumlahPembagi == 2){
        echo $i.",";
    }
}

?>