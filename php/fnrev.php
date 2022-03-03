<?php

function reverse($num){
    $rev = 0;
    $ld = 0;
    $temp = $num;

    while ($num>0){
    $ld = $num % 10;
    $rev = $rev * 10 + $ld;
    $num = floor($num / 10);
    }
    echo "reverse of : " . $temp . " is " . $rev ;
}

$num = 123;
reverse($num)

?>