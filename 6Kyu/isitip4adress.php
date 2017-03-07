<?php

/*Implement String#ipv4_address?, which should return true if given object is an IPv4 address - four numbers (0-255) separated by dots.

It should only accept addresses in canonical representation, so no leading 0s, spaces etc.

class MyTestCases extends TestCase
{
    // test function names should start with "test"
    public function testBasics() {
      $this->assertEquals( False,ipv4_address(""));
      $this->assertEquals( True,ipv4_address("127.0.0.1"));
      $this->assertEquals( True,ipv4_address("0.0.0.0"));
      $this->assertEquals( True,ipv4_address("255.255.255.255"));
      $this->assertEquals( True,ipv4_address("10.20.30.40"));
      $this->assertEquals( False,ipv4_address("10.256.30.40"));
      $this->assertEquals( False,ipv4_address("10.20.030.40"));
      $this->assertEquals( False,ipv4_address("127.0.1"));
      $this->assertEquals( False,ipv4_address("127.0.0.0.1"));
      $this->assertEquals( False,ipv4_address("..255.255"));
      $this->assertEquals( False,ipv4_address("127.0.0.1\n"));
      $this->assertEquals( False,ipv4_address("\n127.0.0.1"));
      $this->assertEquals( False,ipv4_address(" 127.0.0.1"));
      $this->assertEquals( False,ipv4_address("127.0.0.1 "));
      $this->assertEquals( False,ipv4_address(" 127.0.0.1 "));
    }
  }*/


  var_dump(ipv4_address(""));
  var_dump(ipv4_address("127.0.0.1"));
  var_dump(ipv4_address("0.0.0.0"));
  var_dump(ipv4_address("255.255.255.255"));
  var_dump(ipv4_address("10.20.30.40"));
  var_dump(ipv4_address("10.256.30.40"));
  var_dump(ipv4_address("10.20.030.40"));
  var_dump(ipv4_address("127.0.1"));
  var_dump(ipv4_address("127.0.0.0.1"));
  var_dump(ipv4_address("..255.255"));
  var_dump(ipv4_address("127.0.0.1\n"));
  var_dump(ipv4_address("\n127.0.0.1"));
  var_dump(ipv4_address(" 127.0.0.1"));
  var_dump(ipv4_address("127.0.0.1 "));
  var_dump(ipv4_address(" 127.0.0.1 "));

  function ipv4_address($address){
   $result=array();
   $sectionarr=explode(".", $address);
   if(count($sectionarr)!=4){
    return false;
  }
  for ($i=0; $i <count($sectionarr); $i++) { 
    $digits=str_split($sectionarr[$i]);
    for ($a=0; $a<count($digits); $a++) {
     if (count($digits)>1 && $digits[0]==0) {
      array_push($result, 0);
    }else if (is_numeric($digits[$a]) && (int)$sectionarr[$i]<=255){
      array_push($result, 1);
    }else{
      array_push($result, 0);
    }
  }
}

return in_array(0, $result)? false: true;
}