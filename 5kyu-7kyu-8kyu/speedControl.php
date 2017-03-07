<?php
/*

7Kyu

In John's car the GPS records every s seconds the distance travelled from an origin (distances are measured in an arbitrary but consistent unit). For example, below is part of a record with s = 15:

x = [0.0, 0.19, 0.5, 0.75, 1.0, 1.25, 1.5, 1.75, 2.0, 2.25]
The sections are:

0.0-0.19, 0.19-0.5, 0.5-0.75, 0.75-1.0, 1.0-1.25, 1.25-1.50, 1.5-1.75, 1.75-2.0, 2.0-2.25
We can calculate John's average hourly speed on every section and we get:

[45.6, 74.4, 60.0, 60.0, 60.0, 60.0, 60.0, 60.0, 60.0]
Given s and x the task is to return as an integer the *floor* of the maximum average speed per hour obtained on the sections of x. If x length is less than or equal to 1 return 0 since the car didn't move.

Example:

with the above data your function gps(x, s)should return 74

Note

With floats it can happen that results depends on the operations order. To calculate hourly speed you can use:

(3600 * delta_distance) / delta_speed.*/



/*class SpeedControlTestCases extends TestCase
{
    private function assertFuzzyEquals($actual, $expected) {
        $inrange = abs($actual - $expected) <= 1;
        if ($inrange == false) {
            echo "abs(actual - expected) should be <= 1. Expected value must be $expected but got $actual";
            echo "\r\n";
        }
        $this->assertEquals(true, $inrange);
    }
    public function testSpeed() {
        $x = [0.0, 0.23, 0.46, 0.69, 0.92, 1.15, 1.38, 1.61];$s = 20;$u = 41;
        $this->assertFuzzyEquals(gps($s, $x), $u);
        $x = [0.0, 0.11, 0.22, 0.33, 0.44, 0.65, 1.08, 1.26, 1.68, 1.89, 2.1, 2.31, 2.52, 3.25];$s = 12;$u = 219;
        $this->assertFuzzyEquals(gps($s, $x), $u);
        $x = [0.0, 0.18, 0.36, 0.54, 0.72, 1.05, 1.26, 1.47, 1.92, 2.16, 2.4, 2.64, 2.88, 3.12, 3.36, 3.6, 3.84];$s = 20;$u = 80;
        $this->assertFuzzyEquals(gps($s, $x), $u);
    }
}
*/

$x = [0.0, 0.18, 0.36, 0.54, 0.72, 1.05, 1.26, 1.47, 1.92, 2.16, 2.4, 2.64, 2.88, 3.12, 3.36, 3.6, 3.84];
$s = 20;
echo gps($s, $x);
function gps($s, $x) {
	$section=[]; 
	for ($i=1; $i <count($x) ; $i++) { 
		array_push($section, (3600*($x[$i]-$x[$i-1]))/$s);
	}
	return round(max($section));
}
