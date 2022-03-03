<?php

function factorial($num){
$temp = $num;
$f = 1;
while ($num > 0) {
    $f = $f *  $num;
    $num = $num- 1;
}
echo "$f is the factorial of $temp" ;
}

$num = 6;
factorial($num)

?>