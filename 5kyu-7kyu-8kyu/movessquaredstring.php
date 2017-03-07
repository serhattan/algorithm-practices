<?php

/*You are given a string of n lines, each substring being n characters long: For example:

s = "abcd\nefgh\nijkl\nmnop"

We will study some transformations of this square of strings.

Symmetry with respect to the main diagonal: diag_1_sym (or diag1Sym or diag-1-sym)
diag_1_sym(s) => "aeim\nbfjn\ncgko\ndhlp"
Clockwise rotation 90 degrees: rot_90_clock (or rot90Clock or rot-90-clock)
rot_90_clock(s) => "miea\nnjfb\nokgc\nplhd"
selfie_and_diag1(s) (or selfieAndDiag1 or selfie-and-diag1) It is initial string + string obtained by symmetry with respect to the main diagonal.
s = "abcd\nefgh\nijkl\nmnop" --> 
"abcd|aeim\nefgh|bfjn\nijkl|cgko\nmnop|dhlp"
or printed for the last:
selfie_and_diag1
abcd|aeim
efgh|bfjn
ijkl|cgko 
mnop|dhlp

Task:

Write these functions diag_1_sym, rot_90_clock, selfie_and_diag1
and

high-order function oper(fct, s) where

fct is the function of one variable f to apply to the string s (fct will be one of diag_1_sym, rot_90_clock, selfie_and_diag1)
Examples:

s = "abcd\nefgh\nijkl\nmnop"
oper(diag_1_sym, s) => "aeim\nbfjn\ncgko\ndhlp"
oper(rot_90_clock, s) => "miea\nnjfb\nokgc\nplhd"
oper(selfie_and_diag1, s) => "abcd|aeim\nefgh|bfjn\nijkl|cgko\nmnop|dhlp"
Notes:

The form of the parameter fct in oper changes according to the language. You can see each form according to the language in "Your test cases".
It could be easier to take these katas from number (I) to number (IV)
A forthcoming kata will study other tranformations.*/

/*class OperTestCases extends TestCase {
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testOperRot90ClockBasics() {        
        $this->revTest(oper("rot90Clock", "rgavce\nvGcEKl\ndChZVW\nxNWgXR\niJBYDO\nSdmEKb"),
            "Sixdvr\ndJNCGg\nmBWhca\nEYgZEv\nKDXVKc\nbORWle");
        $this->revTest(oper("rot90Clock", "EFAxSN\nXbJObC\nMrNVyg\nUKqDsE\nrYnAfU\nnNjADZ"),
            "nrUMXE\nNYKrbF\njnqNJA\nAADVOx\nDfsybS\nZUEgCN");
    }
    public function testOperDiag1SymBasics() {        
        $this->revTest(oper("diag1Sym", "wuUyPC\neNHWxw\nehifmi\ntBTlFI\nvWNpdv\nIFkGjZ"),
            "weetvI\nuNhBWF\nUHiTNk\nyWflpG\nPxmFdj\nCwiIvZ");
        $this->revTest(oper("diag1Sym", "qAdPMX\nkRIQKU\nJeoroo\nNwVbtn\nAmQUqi\nVguxub"),
            "qkJNAV\nARewmg\ndIoVQu\nPQrbUx\nMKotqu\nXUonib");
    }
    public function testOperSelfieAndDiagBasics() {        
        $this->revTest(oper("selfieAndDiag1", "NJVGhr\nMObsvw\ntPhCtl\nsoEnhi\nrtQRLK\nzjliWg"),
            "NJVGhr|NMtsrz\nMObsvw|JOPotj\ntPhCtl|VbhEQl\nsoEnhi|GsCnRi\nrtQRLK|hvthLW\nzjliWg|rwliKg");
    }
}*/
echo oper("rot90Clock", "rgavce\nvGcEKl\ndChZVW\nxNWgXR\niJBYDO\nSdmEKb");

function diag1Sym($s) {
    $counter=0;
    $arr=array();
    $words=explode("\n", $s);
    $strarr=str_split($s);
    for ($a=0; $a <strlen($words[0]); $a++) { 
        for ($i=$counter; $i <count($strarr); $i=$i+strlen($words[0])+1) { 
            array_push($arr, $strarr[$i]);
        }
        array_push($arr, "\n");
        $counter++;
    }
    array_pop($arr);
    return implode("", $arr);
}
function rot90Clock($s) {
    $arr=array();
    $function = diag1Sym($s);
    $words = explode("\n", $function);
    for ($i=0; $i<count($words); $i++) { 
        array_push($arr, implode("",array_reverse(str_split($words[$i]))));
        array_push($arr, "\n");
    }
    array_pop($arr);
    return implode("", $arr);
}
function selfieAndDiag1($s) {
    $wordsarr=array();
    $words1=explode("\n", $s);
    $words2=explode("\n", diag1Sym($s));
    for ($i=0; $i <count($words1) ; $i++) { 
        array_push($wordsarr, $words1[$i]);
        array_push($wordsarr, "|");
        array_push($wordsarr, $words2[$i]);
        array_push($wordsarr, "\n");
        implode("", $wordsarr);
    }
    array_pop($wordsarr);
    return implode("",$wordsarr);
}
function oper($fct, $s) {
    if ($fct=="diag1Sym") {
        return diag1Sym($s);
    }else if ($fct=="rot90Clock") {
        return rot90Clock($s);
    }else if ($fct="selfieAndDiag1") {
        return selfieAndDiag1($s);
    }
}