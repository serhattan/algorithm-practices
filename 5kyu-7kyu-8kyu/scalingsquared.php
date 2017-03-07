<?php

/*You are given a string of n lines, each substring being n characters long. For example:

s = "abcd\nefgh\nijkl\nmnop"

We will study the "horizontal" and the "vertical" scaling of this square of strings.

A k-horizontal scaling of a string consists of replicating k times each character of the string (except '\n').

Example: 2-horizontal scaling of s: => "aabbccdd\neeffgghh\niijjkkll\nmmnnoopp"
A v-vertical scaling of a string consists of replicating v times each part of the squared string.

Example: 2-vertical scaling of s: => "abcd\nabcd\nefgh\nefgh\nijkl\nijkl\nmnop\nmnop"
Function scale(strng, k, v) will perform a k-horizontal scaling and a v-vertical scaling.

Example: a = "abcd\nefgh\nijkl\nmnop"
scale(a, 2, 3) --> "aabbccdd\naabbccdd\naabbccdd\neeffgghh\neeffgghh\neeffgghh\niijjkkll\niijjkkll\niijjkkll\nmmnnoopp\nmmnnoopp\nmmnnoopp"
Printed:

abcd   ----->   aabbccdd
efgh            aabbccdd
ijkl            aabbccdd
mnop            eeffgghh
                eeffgghh
                eeffgghh
                iijjkkll
                iijjkkll
                iijjkkll
                mmnnoopp
                mmnnoopp
                mmnnoopp
Task:

Write function scale(strng, k, v) k and v will be positive integers. If strng == "" return "".

class scalingTestCases extends TestCase {
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testScalingBasics() {        
        $a = "abcd\nefgh\nijkl\nmnop";
        $r = "aabbccdd\naabbccdd\naabbccdd\neeffgghh\neeffgghh\neeffgghh\niijjkkll\niijjkkll\niijjkkll\nmmnnoopp\nmmnnoopp\nmmnnoopp";
        $this->revTest(scale($a, 2, 3), $r);

        $this->revTest(scale("CG\nla", 2, 3), "CCGG\nCCGG\nCCGG\nllaa\nllaa\nllaa");
    }
}

*/
$deneme=["abcd"];
$a = "abcd\nefgh\nijkl\nmnop";

echo scale($a,2,3);

function scale($s, $k, $n) {
	if (!empty($s)) {
		$abc=array();
		$word = explode("\n", $s);
		for ($i=0; $i <count($word) ; $i++) {
			$splitarray = str_split($word[$i]);
			for ($c=0; $c < $n ; $c++) { 
				for ($a=0; $a < count($splitarray); $a++) { 
					for ($b=0; $b <$k ; $b++) { 
						array_push($abc, $splitarray[$a]);
					}
				}				
				array_push($abc, "\n");	
			}
		}
		array_pop($abc);
		return implode("", $abc);
	}else{
		return "";
	}
}