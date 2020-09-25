<?php


function blueOcean($array, $param){
    $temp = [];
    for ($i=0; $i < count($array) ; $i++) { 
        for ($j=0; $j < count($param) ; $j++) { 
            if($array[$i] != $param[$j]) {
                array_push($temp, $array[$i]);
            }
        }
    }
    return $temp;
}

$array = [1,2,3,4,6,10];
$param = [1];
print_r(blueOcean($array, $param));