<?php

function pengulanganLaluLintas($noLintas, $kondisiTerminasi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6, $kt7, $kt8 ,$kt9, $kt10){
    for($noLintas; $noLintas <= $kondisiTerminasi; $noLintas++){
        if($noLintas == $kt1 || $noLintas == $kt2 || $noLintas == $kt3 || $noLintas == $kt4 || $noLintas == $kt5){
            echo "Lampu lalu lintas no $noLintas tidak lancar <br />";
        }else if($noLintas == $kt6 || $noLintas == $kt7 || $noLintas == $kt8 || $noLintas == $kt9){
            echo "Lampu lalu lintas no $noLintas tidak berfungsi <br />";
        }else if($noLintas == $kt10){
            echo "Lampu lalu lintas no $noLintas sedang diperbaiki <br />";
        } else {
            echo "Lampu lalu lintas no $noLintas lancar <br />";
        }
    }
}

// if($noAngkot <= $kondisiTerminasi1 || $noAngkot == $kondisiTerminasi3 || $noAngkot == $kondisiTerminasi8 || $noAngkot == $kondisiTerminasi9){ 
//     echo "Angkot no - $noAngkot tersedia <br />";
// }else if($noAngkot <= $kondisiTerminasi2 || $noAngkot == $kondisiTerminasi5 || $noAngkot == $kondisiTerminasi6){
//     echo "Angkot no - $noAngkot sedang diperbaiki <br />";
// }else{
//     echo "Angkot no - $noAngkot tidak tersedia <br />";
// }







echo pengulanganLaluLintas(1, 20, 2, 4, 10, 12, 18, 5, 11, 13, 14, 16);







?>