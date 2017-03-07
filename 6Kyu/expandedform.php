<?php

/*

6kyu

Write Number in Expanded Form

You will be given a number and you will need to return it as a string in Expanded Form. For example:

expanded_form(12); // Should return "10 + 2"
expanded_form(42); // Should return "40 + 2"
expanded_form(70304); // Should return "70000 + 300 + 4"
NOTE: All numbers will be whole numbers greater than 0.

class ExpandedFormTest extends TestCase {
  public function testDescriptionExamples() {
    $this->assertEquals("10 + 2", expanded_form(12));
    $this->assertEquals("40 + 2", expanded_form(42));
    $this->assertEquals("70000 + 300 + 4", expanded_form(70304));
  }
}*/
echo expanded_form(12);

function expanded_form($n){
	$counter=0;
	$arr=array();
	$digits=str_split($n);
	for ($i=count($digits)-1; $i>=0 ; $i--) { 
		if ($digits[$i]*pow(10, $counter)!=0) {
			array_push($arr,$digits[$i]*pow(10, $counter));
		}
		$counter++;
	}
	return implode(" + ",array_reverse($arr));
}