<?php

// [2, 4, 0, 100, 4, 11, 2602, 36]
// Should return: 11 (the only odd number)
// [160, 3, 1719, 19, 11, 13, -21]
// Should return: 160 (the only even number)
// [11, 13, 15, 19, 9, 13, -21]
// Should return: false (all odd integer, no outlier)

// $input2 = [160, 3, 1719, 19, 11, 13, -21];
// $input3 = [11, 13, 15, 19, 9, 13, -21];

function parity ($input) {
    $len = count($input);
    $temporary_positif = [];
    $temporary_negatif = [];
    for ($i=0; $i < $len ; $i++) { 
        if($input[$i] % 2 == 0) {
            array_push($temporary_positif, $input[$i]);
        } else {
            array_push($temporary_negatif, $input[$i]);
        }
    }
    
    if(count($temporary_positif) == 1 ) {
        return $temporary_positif[0];
    }
    
    if(count($temporary_negatif) == 1 ) {
        return $temporary_negatif[0];
    }
    
    if(count($temporary_positif) > 1 && count($temporary_negatif) > 1) {
        return false;
    }
}


$input = [2, 4, 0, 100, 4, 11, 2602, 36];
echo parity($input);
