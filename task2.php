<?php
function addition($n){
    $sum=0;
    for($i=0;$i<=$n;$i++){
        $sum=$sum+$i;
    }
    return $sum;
}
$n=10;
$answer=addition($n);

echo $answer;
?>