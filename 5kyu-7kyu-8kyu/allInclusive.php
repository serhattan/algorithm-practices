<?php
/*
Input:

a string strng
an array of strings arr
Output of function contain_all_rots(strng, arr) (or containAllRots or contain-all-rots):

a boolean true if all rotations of strng are included in arr (C returns 1)
false otherwise (C returns 0)
Examples:

contain_all_rots(
  "bsjq", ["bsjq", "qbsj", "sjqb", "twZNsslC", "jqbs"]) -> true

contain_all_rots(
  "Ajylvpy", ["Ajylvpy", "ylvpyAj", "jylvpyA", "lvpyAjy", "pyAjylv", "vpyAjyl", "ipywee"]) -> false)
Note:

Though not correct in a mathematical sense

we will consider that there are no rotations of strng == ""
and for any array arr: contain_all_rots("", arr) --> true
Ref: https://en.wikipedia.org/wiki/String_(computer_science)#Rotations*/

/*
class AllInclusiveTestCases extends TestCase {
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {        
        $this->revTest(containAllRots("bsjq", 
            ["bsjq", "qbsj", "sjqb", "twZNsslC", "jqbs"]), true);
        $this->revTest(containAllRots("XjYABhR", 
            ["TzYxlgfnhf", "yqVAuoLjMLy", "BhRXjYA", "YABhRXj", "hRXjYAB", "jYABhRX", "XjYABhR", "ABhRXjY"]), false);
        $this->revTest(containAllRots("QJAhQmS", 
            ["hQmSQJA", "QJAhQmS", "QmSQJAh", "yUgUXoQE", "AhQmSQJ", "mSQJAhQ", "SQJAhQm", "JAhQmSQ"]), true);
    }
}
*/

var_dump(containAllRots("bsjq", ["bsjq", "qbsj", "sjqb", "twZNsslC", "jqbs"])); function containAllRots($s, $arr){
	$string = str_split($s);
	$newarray=[];
	$finalarray=[];
	for ($i=0; $i<count(str_split($s)); $i++) {
		array_push($newarray, $string[0]);
		$string = array_splice($string, 1);
		array_push($finalarray, implode(array_merge($string,$newarray)));
	}
	return array_diff($finalarray, $arr) == null ? true:false;
}