<?php

$start=microtime(true);
echo "<pre>";
var_dump(solequa(9005));
echo "</pre>";

function solequa($n){
	$arr1= array();
	$arr2= array();
	$count=0;
	for ($x=$n; $x>0; $x--) {
		for ($y=0; $y<=$n; $y++) {
			$result=($x-$y*2)*($x+$y*2);
			if ($result<0) {
				break;
			}else if ($result==$n) {
				array_push($arr1, $arr2);
				array_push($arr1[$count], $x,$y);
				$count++;
			}
		}
	}
	if (empty($arr1)) {
		array_push($arr1, $arr2);
	}
	return $arr1;
}

$time_elapsed_secs=microtime(true)-$start;
var_dump($time_elapsed_secs);