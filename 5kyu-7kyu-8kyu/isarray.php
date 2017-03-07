<?php

$start=microtime(true);
echo "<pre>";
var_dump(solequa(90005));
echo "</pre>";

function solequa($n){
	$arr1= array();
	$arr2= array();
	$count=0;
	$x=0;
	for ($y=round($n/2); $y>=0; $y--) {
		$x=(int)sqrt($n+(4*($y*$y)));
		$result=($x-$y*2)*($x+$y*2);
		if ($result==$n) {
			array_push($arr1, $arr2);
			array_push($arr1[$count], $x,$y);
			$count++;
		}
	}
	if (empty($arr1)) {
		array_push($arr1, $arr2);
	}
	return $arr1;
}

$time_elapsed_secs=microtime(true)-$start;
var_dump($time_elapsed_secs);

?>
