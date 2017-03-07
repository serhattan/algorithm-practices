<?php

/*

6kyu

Your task is to construct a building which will be a pile of n cubes. The cube at the bottom will have a volume of n^3, the cube above will have volume of (n-1)^3 and so on until the top which will have a volume of 1^3.

You are given the total volume m of the building. Being given m can you find the number n of cubes you will have to build?

The parameter of the function findNb (find_nb, find-nb) will be an integer m and you have to return the integer n such as n^3 + (n-1)^3 + ... + 1^3 = m if such a n exists or -1 if there is no such n.

Examples:

findNb(1071225) --> 45
findNb(91716553919377) --> -1
class PileOfCubesCases extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {
        $this->revTest(findNb(4183059834009), 2022);
        $this->revTest(findNb(24723578342962), -1);
        $this->revTest(findNb(135440716410000), 4824);
    }
}*/

echo findNb(135440716410000);

function findNb($m){
	$i=0; $counter=0; $sum=0;
	while($sum<$m){
		$i++;
		$counter++;
		$sum=$sum+$i*$i*$i;
	}
	if ($sum==$m) {
		return $counter;
	}else {
		return -1;
	}
}