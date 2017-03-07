<?php

/*
class TortoiseRacingCases extends TestCase
{
    public function testBasics() {
        $this->assertEquals([0, 32, 18], race(720, 850, 70));
        $this->assertEquals([3, 21, 49], race(80, 91, 37));
        $this->assertEquals([2, 0, 0], race(80, 100, 40));
    }
}
*/

var_dump(race(80, 100, 40));

function race($v1,$v2,$g){
	$floathours=floor(($g/($v2-$v1))*3600);
	$seconds=$floathours%60;
	$hours=floor($floathours/3600);
	$minutes=floor(($floathours-($hours*60*60+$seconds))/60);
	return $v1<$v2? [$hours, $minutes, $seconds]: null;
}