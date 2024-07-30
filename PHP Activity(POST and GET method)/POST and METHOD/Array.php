<?php

$color = array("green", "white", "blue");

echo count($color);
echo "<br>";

echo "My favorite color are " .$color[0]. ", " .$color[1].", and " .$color[2];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$numArray = count($color);

for($x = 0; $x < $numArray; $x++){
    echo $color[$x];
    echo "<br>";

}

?>