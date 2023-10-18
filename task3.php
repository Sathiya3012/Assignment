<?php
function operation($num1,$num2,$operators){
    switch($operators){
        case "add":
            $result=$num1+$num2;
            break;
        case "sub":
            $result=$num1-$num2;
            break;
        case "mul":
            $result=$num1*$num2;
            break;
        case "div":
            $result=$num1 / $num2;
            break;
        default:
            echo "invalid operator"   ;    

    }
    return $result;
}

$num1=100;
$num2=10;
$operators="add";

$result=operation($num1,$num2,$operators);
echo $result;

?>