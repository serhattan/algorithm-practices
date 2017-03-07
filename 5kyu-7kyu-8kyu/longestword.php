<?php
/*
Write a function longest() that takes one argument, a list of words, and returns the length of the longest word in the list.

For example:

>>> words = ['simple', 'is', 'better', 'than', 'complex']
>>> longest(words)
7*/

// PHPUnit Test Examples:
// TODO: Replace examples and use TDD development by writing your own tests
/*class MyTestCases extends TestCase
{
    // test function names should start with "test"
    public function testThatSomethingShouldHappen() {
      $this->assertEquals(7,longest(['simple', 'is', 'better', 'than', 'complex']));
      $this->assertEquals(8, longest(['explicit', 'is', 'better', 'than', 'implicit']));
      $this->assertEquals(9, longest(['beautiful', 'is', 'better', 'than', 'ugly']));
      $this->assertEquals(7, longest(['There', 'is', 'alyways', 'hope']));
    }
}*/



function longest($words) {
  $longest=0;
  foreach ($words as $value) {
    if(strlen($value)>$longest){
      $longest=strlen($value);
    }
  }
  return $longest; 
}

$word=['simple', 'is', 'better', 'than', 'complex'];
$test=longest($word);
echo $test;