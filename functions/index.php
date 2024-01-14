<?php
//What are functions and how to write them
//encapsulation
include_once "index1.php";
$x=12;
if(evenorodd($x)){
    echo "{$x} is an even number";
}
else{
    echo "{$x} is an odd number";
}

$x=12;
echo "Factorial of {$x} is".factorial($x);

?>