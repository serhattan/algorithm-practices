<?php

/*5kyu

Given a positive number n > 1 find the prime factor decomposition of n. The result will be a string with the following form :

 "(p1**n1)(p2**n2)...(pk**nk)"
with the p(i) in increasing order and n(i) empty if n(i) is 1.

Example: n = 86240 should return "(2**5)(5)(7**2)(11)"

class PrimeFactorsTestCases extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {
        $this->revTest(primeFactors(7775460),"(2**2)(3**3)(5)(7)(11**2)(17)");
        $this->revTest(primeFactors(7919),"(7919)");
        $this->revTest(primeFactors(17*17*93*677),"(3)(17**2)(31)(677)");
    }
}*/

echo primeFactors(7775460);

function primeFactors($n) {
	$nums=array();
	$result=array();
	$remainder=$n;
	for ($i=2; $i<=$remainder; $i++) { 
		if ($remainder%$i==0) {
			$remainder=$remainder/$i;
			array_push($nums, $i);
			$i--;
		}
	}
	$variable = array_count_values($nums);
	foreach ($variable as $key => $value) {
		if ($value==1) {
			array_push($result,"(",$key,")");
		}else{
			array_push($result,"(", $key,"**",$value,")");
		}
	}
	return(implode("", $result));
}