<?php 

/*Description:

Remove all exclamation marks from the end of words. Words are separated by spaces in the sentence.
Examples

remove("Hi!") === "Hi"
remove("Hi!!!") === "Hi"
remove("!Hi") === "!Hi"
remove("!Hi!") === "!Hi"
remove("Hi! Hi!") === "Hi Hi"
remove("!!!Hi !!hi!!! !hi") === "!!!Hi !!hi !hi"

class RemoveTest extends TestCase {
  public function testDescriptionExamples() {
    $this->assertEquals("Hi", remove("Hi!"));
    $this->assertEquals("Hi", remove("Hi!!!"));
    $this->assertEquals("!Hi", remove("!Hi"));
    $this->assertEquals("!Hi", remove("!Hi!"));
    $this->assertEquals("Hi Hi", remove("Hi! Hi!"));
    $this->assertEquals("!!!Hi !!hi !hi", remove("!!!Hi !!hi!!! !hi"));
  }
}*/

echo remove("!!!?!!? ??!!?!  ?jafvaçb!!!llıasfbna????!!!!!!!!!!!!!!!!! ??!!!! !?");

function remove($s){
	$splitarray = str_split($s);
	$count=0;
	foreach ($splitarray as $key => $value) {
		if ($value == " ") {
			for ($a=$key-1; $a>0; $a--) {
				if ($splitarray[$a]=="!") {
					unset($splitarray[$a]);
					$count++;
				}else{
					$a=0;
				}
			}			
		}
	}

	for ($i=count($splitarray)+$count-1; $i>0; $i--) { 
		if ($splitarray[$i]=="!") {
			unset($splitarray[$i]);
		}else{
			break;
		}
	}
	
	return implode("", $splitarray);
}