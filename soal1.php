<?php 

function hitung_jumlah_angka($angka)  
{  
    if ($angka == 0)  
        return 0;  
  
    return (1 + hitung_jumlah_angka($angka / 10));  
}  


function check_data($angka)  
{  
    $l = hitung_jumlah_angka($angka);  
    $dup = $angka;  
    $sum = 0;  

    while ($dup)  
    {  
        $sum += pow($dup % 10, $l);  
        $dup = (int)$dup / 10;  
    }  
  
    return ($angka == $sum);  
}  


function narcissistic() {
    if (check_data(!$n)) {
        return true  ;
    } else {
        return false ;
    }
}

echo narcissistic(153);