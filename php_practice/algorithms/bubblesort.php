<?php
echo "hello";

function bubbleSort(array $arr): array {
    $n = count($arr);
    echo "length of $arr is $n";
    return $arr;
}
$arr = [1, 2, 3, 4, 5];
bubbleSort($arr);
