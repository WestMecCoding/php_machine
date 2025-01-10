<?php


function bubbleSort (array $arr):array {
    $n = count($arr);
#    echo "the length of the $arr is $n";
    for ($i = 0; $i <= $n -1; $i++) {
        echo "$arr[$i], ";
    }
    return $arr;
}
$arr = [1, 2, 3, 4];
bubbleSort($arr);
