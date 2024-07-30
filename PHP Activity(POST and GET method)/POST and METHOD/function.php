<?php
#php function
/*
function message(){
    echo "My First User define function";
}

message();

function studname($name){
    echo "$name <br/>";
}

studname("James I. Manalili");
studname("Troy Pardillo");
studname("Steven Bruce Asis");
studname("Lance Letran");
*/

#Returning val

function addthis($num1, $num2, $num3){
    $sumIs = $num1 + $num2 + $num3;
    return $sumIs;
}

echo addthis(5,10, 9);


?>