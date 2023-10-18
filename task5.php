<?php

$studentDetails=array(
    array("sathiya",20,"BCA"),
    array("satz",17,"B.sc"),
    array("sara",22,"MCA"),
);

foreach($studentDetails as $student){
    list($name,$age,$department)=$student;
    echo "Name: $name , Age: $age , Department: $department \n";

}
?>