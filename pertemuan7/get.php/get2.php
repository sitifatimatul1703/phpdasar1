<?php
// varible scope / lingkup variabel
$x = 10;

function tampilX() {
    $x = 20;
    echo $x;
}

tampilX();
echo "<br>";
echo $x;

?>