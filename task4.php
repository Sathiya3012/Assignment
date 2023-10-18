<?php

$originalArray=["apple","banana","orange","mango","carrot","tomato"];

$removeValue="carrot";

function remove($element){
    global $removeValue;
    return($element !== $removeValue);
}

$newArray=array_filter($originalArray,'remove');

echo print_r($newArray);

?>