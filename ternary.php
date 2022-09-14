<?php
$x= 15;
$y= 20;
$z= 25;

{
   $max = ($x > $y)? (($x > $z)? $x : $z) : (($y > $z)? $y : $z);
   
    echo "Largest number among $x, $y and $z is: $max\n";
	}
	