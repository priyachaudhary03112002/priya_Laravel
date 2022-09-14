<?php
	$arr =array(12, 3, 4, 15, 10);
	$n = sizeof($arr);
	$sum=0;
		for ($i = 0; $i < $n; $i++)
	{
    $sum = $sum + $arr[$i];
	}

	echo "Sum of given array is " . $sum;
 ?>
