<?php

/*Decipher this!
You are given several secret messages you need to decipher. Here are the conditions:

The first letter corresponds to ASCII character code (case sensitive)
The second letter needs to be switched to the last letter
The last letter needs to be switched to the second letter
If it only has one letter, it will be unchanged
If it only has two letters, you will just need to convert the ASCII character code to a letter
Keepin' it simple -- there are no special characters

Example:
decipherThis('72olle 103doo 100ya'); // 'Hello good day'
decipherThis('82yade 115te 103o'); // 'Ready set go'
,
// PHPUnit Test Examples:
// TODO: Replace examples and use TDD development by writing your own tests
class MyTestCases extends TestCase
{
    // test function names should start with "test"
    public function testThatSomethingShouldHappen() {
      $this->assertEquals(decipherThis('72olle 103doo 100ya'), 'Hello good day');
      $this->assertEquals(decipherThis('82yade 115te 103o'), 'Ready set go');
    }
}*/

echo decipherThis('72olle 103doo 100ya');

function decipherThis($str){
	$words = explode(" ", $str);
	$count=0;
	$arr=array();
	$arr1=array();
	foreach ($words as $value) {
		$chars = str_split($value);

		for ($i=0; $i <count($chars) ; $i++) { 
			if (is_numeric($chars[$i])) {
				array_push($arr1, $chars[$i]);								
			}else{
				break;
			}
		}

		if (count($chars)==1) {
			array_push($arr, ord($value));
		}else if (count($chars)==2) {
			$chars[0]=ord($chars[0]);
			array_push($arr, implode("", $chars));
		}else {
			$chars[0]=ord($chars[0]);
			$temp=$chars[1];
			$chars[1]=$chars[count($chars)-1];
			$chars[count($chars)-1]=$temp;
			array_push($arr, implode("", $chars));
		}
	}
	return implode(" ", $arr);
}