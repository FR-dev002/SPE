<?php


function findNeedle($array, $param)  {
    for ($i=0; $i < count($array) ; $i++) { 
        if($array[$i] == $param) {
            return $i;
        break;
        }
    }
}


$array = ["red", "bluess", "blue", "black", "grey"];
$param = "blue";
echo findNeedle($array, $param);
