<?php

//6- Write a script to calculate the number of digits in an integer. (Without converting it to any other data type)

$x=22883;
$flag=0;

while($x>1){
    $x/=10;
    $flag++;
};

echo $flag;

?>
