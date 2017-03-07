<?php
/*You are given an array strarr of strings and an integer k. Your task is to return the first longest string consisting of k consecutive strings taken in the array.

Example:

longest_consec(["zone", "abigail", "theta", "form", "libe", "zas", "theta", "abigail"], 2) --> "abigailtheta"

n being the length of the string array, if n = 0 or k > n or k <= 0 return "".

class ConsecutiveTestCases extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {
        $this->revTest(longestConsec(["zone", "abigail", "theta", "form", "libe", "zas"], 2), "abigailtheta");
        $this->revTest(longestConsec(["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"], 1), "oocccffuucccjjjkkkjyyyeehh");
        $this->revTest(longestConsec([], 3), "");
    }
}*/

echo longestconsec(["vweqilsfytihvrzlaodfixoyxvyuyvgpck", "wkppqsztdkmvcuwvereiupccauycnjutlv", "itvayloxrp", "form", "libe", "zas"], 2);

function longestconsec($strarr,$k){
	if (!(empty($strarr) || $k<=0 || $k>count($strarr))) {
		$result=array();
		foreach ($strarr as $value) {
			for ($a=count($strarr)-1; $a>0; $a--) { 
				if (strlen($strarr[$a-1])<strlen($strarr[$a])) {
					$temp = $strarr[$a];
					$strarr[$a] = $strarr[$a-1];
					$strarr[$a-1] = $temp;
				}else if(strlen($strarr[$a-1])==strlen($strarr[$a])){
					$temp = $strarr[$a-1];
					$strarr[$a-1] = $strarr[$a];
					$strarr[$a] = $temp;
				}
			}
		}
		for ($b=$k-1; $b>=0; $b--) {
			if (strlen($strarr[$b])==strlen($strarr[$b+1])) {
				array_push($result, $strarr[$b+1]);
				array_push($result, $strarr[$b]);
				$b=$b+1;
			}else if(strlen($strarr[$b])>strlen($strarr[$b+1])){
				array_push($result, $strarr[$b-$k]);
			}
		}
		echo "<pre>";
		var_dump($strarr);
		return implode("", $result);
	} else{
		return "";
	}
}



/*
	 ________
	|
	|
	|______
	|
	|
	|


*/