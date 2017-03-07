<?php
/*his program tests the life of an evaporator containing a gas.

We know the content of the evaporator (content in ml), the percentage of foam or gas lost every day (evap_per_day) and the threshold (threshold) in percentage beyond which the evaporator is no longer useful. All numbers are strictly positive.

The program reports the nth day (as an integer) on which the evaporator will be out of use.

Note : Content is in fact not necessary in the body of the function "evaporator", you can use it or not use it, as you wish. Some people might prefer to reason with content, some other with percentages only. It's up to you but you must keep it as a parameter because the tests have it as an argument.

class DeodorantTestCases extends TestCase {
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {        
        $this->revTest(evaporator(10,10,10),22);
        $this->revTest(evaporator(10,10,5),29);
        $this->revTest(evaporator(100,5,5),59);
    }
}
*/

echo evaporator(100,5,5);

function evaporator($content, $evap_per_day, $threshold){

	$days=0;
	$threshold = (($content*$threshold)/100);
	while ($content>$threshold) {
		$days++;
		$content = $content - (($content*$evap_per_day)/100);
	}
	return $days;
}