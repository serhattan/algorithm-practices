<?php

/*Can Santa save Christmas?

Oh no! Santa's little elves are sick this year. He has to distribute the presents on his own. 
But he has only 24 hours left. Can he do it?
Your job is to determine if Santa can distribute all the presents in 24 hours. 

Your Task:

You will get an array as input with time durations as string in the following format: 
"hh:mm:ss"

Each duration is a present Santa has to distribute. 

Return true or false whether he can do it in 24 hours or not. 

If this kata was to easy for you. Try the harder one. 
class CanSantaSaveChristmasTest extends TestCase {
  public function testFixed() {
    $this->assertTrue(determine_time(["00:30:00", "02:30:00", "00:15:00"]));
    $this->assertTrue(determine_time([]));
    $this->assertTrue(determine_time(["12:00:00", "12:00:00"]));
    $this->assertFalse(determine_time(["06:00:00","12:00:00","06:30:00"]));
  }
}*/
var_dump(determine_time(["20:30:00", "03:30:00", "00:15:00"]));

function determine_time($durations){
$second=0;
	for ($i=0; $i <count($durations) ; $i++) { 
		echo "<pre>";
		$explode = explode(":", $durations[$i]);
		$second=($explode[0]*60*60)+($explode[1]*60)+$explode[2]+$second;
		if ($second>86400) {
			return false;
		}
	}
	return true;
	  
}