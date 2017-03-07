<?php

/*Description:

Remove some exclamation marks to keep the same number of exclamation marks at the beginning and end of each word. Words are separated by spaces in the sentence. Please note: only can remove, can not append.
Examples

remove("Hi!") === "Hi"
remove("!Hi! Hi!") === "!Hi! Hi"
remove("!!Hi! !Hi!!") === "!Hi! !Hi!"
remove("!!!!Hi!! !!!!Hi !Hi!!!") === "!!Hi!! Hi !Hi!"

class RemoveTest extends TestCase {
  public function testFixed() {
    $this->assertEquals("Hi", remove("Hi!"));
    $this->assertEquals("!Hi! Hi", remove("!Hi! Hi!"));
    $this->assertEquals("!Hi! !Hi!", remove("!!Hi! !Hi!!"));
    $this->assertEquals("!!Hi!! Hi !Hi!", remove("!!!!Hi!! !!!!Hi !Hi!!!"));
  }
}

*/


echo remove("!!!!Hi!! !!!!!!!!!!! !!!!Hi !Hi!!!");

function remove($s){
	$words = explode(" ", $s);
	$arr=array();
	foreach ($words as $value) {
		$end=0;
		$begin=0;
		$chars=str_split($value);
		for ($i=count($chars)-1; $i>0; $i--) { 
			if ($chars[$i]=="!") {
				$end++;
			}else{
				break;
			}
		}

		for ($a=0; $a <count($chars); $a++) { 
			if ($chars[$a]=="!") {
				$begin++;
			}else {
				break;
			}
		}

		ifstatement:
		if ($begin>$end) {
			$begin--;
			unset($chars[$begin]);
			goto ifstatement;
		}else if ($begin<$end) {
			array_pop($chars);
			$end--;
			goto ifstatement;
		}else if ($begin==count($chars) || $end==count($chars)) {
			$chars=[];
		}
		array_push($arr, implode("", $chars));
	}
	return implode(" ", $arr);
}