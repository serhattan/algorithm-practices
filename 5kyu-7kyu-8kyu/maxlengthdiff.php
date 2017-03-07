<?php

/*You are given two arrays a1 and a2 of strings. Each string is composed with letters from a to z. Let x be any string in the first array and y be any string in the second array.

Find max(abs(length(x) − length(y)))

If a1 or a2 are empty return -1 in each language except in Haskell where you will return Nothing.

Example:

s1 = ["hoqq", "bbllkw", "oox", "ejjuyyy", "plmiis", "xxxzgpsssa", "xxwwkktt", "znnnnfqknaz", "qqquuhii", "dvvvwz"]
s2 = ["cccooommaaqqoxii", "gggqaffhhh", "tttoowwwmmww"]
mxdiflg(s1, s2) --> 13*/

/*
class MaxLenDiffTestCases extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {
        $s1 = ["hoqq", "bbllkw", "oox", "ejjuyyy", "plmiis", "xxxzgpsssa", "xxwwkktt", "znnnnfqknaz", "qqquuhii", "dvvvwz"];
        $s2 = ["cccooommaaqqoxii", "gggqaffhhh", "tttoowwwmmww"];
        $this->revTest(mxdiflg($s1, $s2), 13);
        $s1 = ["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"];
        $s2 = ["bbbaaayddqbbrrrv"];
        $this->revTest(mxdiflg($s1, $s2), 10);
        $s1 = ["ccct", "tkkeeeyy", "ggiikffsszzoo", "nnngssddu", "rrllccqqqqwuuurdd", "kkbbddaakkk"];
        $s2 = ["tttxxxxxxgiiyyy", "ooorcvvj", "yzzzhhhfffaaavvvpp", "jjvvvqqllgaaannn", "tttooo", "qmmzzbhhbb"];
        $this->revTest(mxdiflg($s1, $s2), 14) ;
*/

function mxdiflg($a1, $a2) {
    if (empty($a1) || empty($a2)) { return -1; }
    $a2 = array_map('strlen', $a2);
    $a1 = array_map('strlen', $a1);
    
    return max(abs(min($a2) - max($a1)), abs(max($a2)-min($a1)));
}