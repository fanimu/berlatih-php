<?php

function cari_mean($arr){

    $count = count($arr);                 
    $sum = array_sum($arr);               
    $total = $sum / $count; 

    return number_format($total);
}


echo cari_mean([1, 2, 3, 4, 5])." <br>"; // 3
echo cari_mean([3, 5, 7, 5, 3])." <br>"; // 5
echo cari_mean([6, 5, 4, 7, 3])." <br>"; // 5
echo cari_mean([1, 3, 3])." <br>"; // 2
echo cari_mean([7, 7, 7, 7, 7])." <br>"; // 7

?>