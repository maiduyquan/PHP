<?php
$a=0;
$b=10;
if ($a && $b){
    echo "Test1 : both a and b are true<br/>";
}else{
    echo "Test1 : either a or b is false<br/>";
}
if ($a and $b){
    echo "Test2 : both a and b are true<br/>";
}else{
    echo "Test2 : either a or b is false<br/>";
}
if ($a || $b){
    echo "Test3 : either a or b are true<br/>";
}else{
    echo "Test3 : both a and b is false<br/>";
}
if ($a or $b){
    echo "Test4 : either a or b are true<br/>";
}else{
    echo "Test4 : both a and b is false<br/>";
}
$a=10;
$b=0;
if ($a){
    echo "Test5 : a is true<br/>";
}else{
    echo "Test5 : a is false<br/>";
}
if ($b){
    echo "Test6 : b is true<br/>";
}else{
    echo "Test6 : b is false<br/>";
}
if (!$a){
    echo "Test7 : a is true<br/>";
}else{
    echo "Test7 : a is false<br/>";
}
if (!$b){
    echo "Test8 : b is true<br/>";
}else{
    echo "Test8 : b is false<br/>";
}
