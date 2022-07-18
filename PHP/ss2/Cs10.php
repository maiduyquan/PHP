<?php
    class color{
        function color(){
            $color_name = "green";
            echo "color is: " .$color_name;
        }
        function ChangeColor(){
            $color_name = "red";
            echo "<br>update color is: " .$color_name;
        }
    }
    $objcolor = new color();
    $objcolor ->color();
    $objcolor ->ChangeColor();
?>
