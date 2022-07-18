<?php
function static_varialbe(){
    static $x =10;
    $y = 20;
    $x++;
    $y++;
    echo "static: " .$x . "</br>";
    echo "Non-static: " . $y ."</br>";
}
static_varialbe();
static_varialbe();
?>
