<?php
/*	Oh no!

Some really funny web dev gave you an array of numbers from his API response as an array of strings!

You need to cast the whole array to the correct type.

Create the function

that takes as a parameter an array of numbers represented as strings and outputs an array of numbers.

ie:["1", "2", "3"] to [1, 2, 3]

Note that you can receive floats as well.

class MyTestCases extends TestCase
{
    public function testExample() {
        $this->assertSame([1.1,2.2,3.3], toNumberArray(["1.1","2.2","3.3"]));
    }
}
*/
echo "<pre>";
var_dump(toNumberArray(array("0.5", "1", "2.8", "3")));
echo "</pre>";

function toNumberArray(array $stringArray){
	$deneme = array();
	for ($i=0; $i < count($stringArray) ; $i++) { 
		array_push($deneme, (float)$stringArray[$i]);
	}

	return $deneme;
}