<?php
/*My friend John and I are members of the "Fat to Fit Club (FFC)". John is worried because each month a list with the weights of members is published and each month he is the last on the list which means he is the heaviest.

I am the one who establishes the list so I told him: "Don't worry any more, I will modify the order of the list". It was decided to attribute a "weight" to numbers. The weight of a number will be from now on the sum of its digits.

For example 99 will have "weight" 18, 100 will have "weight" 1 so in the list 100 will come before 99. Given a string with the weights of FFC members in normal order can you give this string ordered by "weights" of these numbers?

Example:

"56 65 74 100 99 68 86 180 90" ordered by numbers weights becomes: "100 180 90 56 65 74 68 86 99"

When two numbers have the same "weight", let us class them as if they were strings and not numbers: 100 is before 180 because its "weight" (1) is less than the one of 180 (9) and 180 is before 90 since, having the same "weight" (9) it comes before as a string.

All numbers in the list are positive numbers and the list can be empty.


class OrderWeightTestCases extends TestCase
{
    public function testBasics() {
      $this->assertEquals("2000 103 123 4444 99", orderWeight("103 123 4444 99 2000"));
      $this->assertEquals("11 11 2000 10003 22 123 1234000 44444444 9999", orderWeight("2000 10003 1234000 44444444 9999 11 11 22 123"));
    }
}*/

echo orderWeight("2000 10003 1234000 44444444 9999 11 11 22 123");

function orderWeight($str) {
	$final=array();
	$result=array();
	$numbers=explode(" ", $str);
	for ($i=0; $i<count($numbers); $i++) { 
		$sum=0;
		$count=0;
		for ($a=0; $a<strlen($numbers[$i]); $a++) { 
			$arr=array();
			$sum=$sum+$numbers[$i][$a];
		}
		$count=strlen($numbers[$i]);
		array_push($arr, $i,$count,$sum);
		array_push($final, $arr);
	}
	for ($v=0; $v<count($final); $v++) { 
		for ($b=0; $b<count($final)-1; $b++) {
			if($final[$b][2]>$final[$b+1][2]){
				$temp=$final[$b];
				$final[$b]=$final[$b+1];
				$final[$b+1]=$temp;
			}else if($final[$b][2]==$final[$b+1][2]){
				for ($u=0; $u <count($final)-1 ; $u++) { 
					if ($final[$b][1]>$final[$b+1][1]) {
						$temp=$final[$b];
						$final[$b]=$final[$b+1];
						$final[$b+1]=$temp;
					}
				}
			}
		}
	}

	for ($k=0; $k<count($final); $k++) { 
		array_push($result, $numbers[$final[$k][0]]);
	}
	return	implode(" ", $result);
}


/* function orderWeight($str) {
  $output = array();
  $temp = array();
  $nums = explode(" ", $str);
  sort($nums, SORT_STRING);
  
  foreach($nums as &$val) {
    $sum = 0;
    foreach(str_split($val, 1) as &$val_in) $sum += $val_in;
    if (!isset($output[$sum])) $output[$sum] = array();
    array_push($output[$sum], (string)$val);
  }
  
  ksort($output);
  foreach ($output as &$t1) foreach($t1 as &$t2) array_push($temp, $t2);
  return implode(' ', $temp);
}

/*
	 _________
	|
	|
	|
	|_______
	|
	|
	|
	|


*/