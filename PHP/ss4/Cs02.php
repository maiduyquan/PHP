<?php
$x=5;
function Test(){
    echo "Following line shows an error since varriable x is declared outside the function.";
    echo "<p> Variable x inside function is: $x error</p>";
}
Test();
echo "<p> Variable x inside function is: $x</p>";
?>
