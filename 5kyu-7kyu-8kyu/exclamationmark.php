<?php

/*Description:

Move all exclamation marks to the end of the sentence
Examples

remove("Hi!") === "Hi!"
remove("Hi! Hi!") === "Hi Hi!!"
remove("Hi! Hi! Hi!") === "Hi Hi Hi!!!"
remove("Hi! !Hi Hi!") === "Hi Hi Hi!!!"
remove("Hi! Hi!! Hi!") === "Hi Hi Hi!!!!"
Note

Please don't post issue about difficulty or duplicate.

class RemoveTest extends TestCase {
  public function testFixed() {
    $this->assertEquals("Hi!", remove("Hi!"));
    $this->assertEquals("Hi Hi!!", remove("Hi! Hi!"));
    $this->assertEquals("Hi Hi Hi!!!", remove("Hi! Hi! Hi!"));
    $this->assertEquals("Hi Hi Hi!!!", remove("Hi! !Hi Hi!"));
    $this->assertEquals("Hi Hi Hi!!!!", remove("Hi! Hi!! Hi!"));
  }
}
*/


var_dump(remove("H!!,!i!, Actual  : 'osCsZ3k2FfULSEJ9ghQKRQkM9M4KDKINJmO7.FuF94r91yt8?,AzlKgWQgEbtAQdmxS7e9S5kLaz,vxnG8tfY.mf?FFEISC6mm,5SisTdSHyU40.B0GOE,FxWSJJQqdZJW2dfc!Z7VQT!sSF6!s1,Y!!!!!!!!!!!!!!!!!!!!!*'!Hi Hi!"));

function remove($s){
	$wordarray=str_split($s);
	for($i=0; $i<count($wordarray); $i++){
		if($wordarray[$i] == "!"){
			unset($wordarray[$i]);
			array_push($wordarray, "!");
		}
	}
	return implode("", $wordarray);
}