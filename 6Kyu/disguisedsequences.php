<?php

/*

6kyu

Let us define two sums u(n, p) and v(n, p):

\large u(n, p) = \sum_{k=0}^{n}{(-1)^k}*p*{4^{n-k}}*\binom{2n-k+1}{k}

\large v(n, p) = \sum_{k=0}^{n}{(-1)^k}*p*{4^{n-k}}*\binom{2n-k}{k}

Task:

1) Calculate u(n, p) and v(n, p) with two brute-force functions u1(n, p) and v1(n, p).
2) Try u1(n, p) and v1(n, p) for small values of n and p and guess the results of u(n, p) and v(n, p)
3) Using 2) write u_eff(n, p) and v_eff(n, p) (or uEff(n, p) and vEff(n, p) or u-eff(n, p) and v-eff(n, p)) to efficiently calculate u and v for big values of n and p

(This third part is not tested in JS, CS, TS, C++, C, PHP, Crystal, Rust, Swift since there you don't have big integers to control your guess in part 2).
Examples:

v1(12, 70) --> 1750
u1(13, 18) --> 252
Extra points:

For the mathy ones: find a relation between v(n, p), v(n-1, p) and u(n-1, p) :-)

class MyTestCases extends TestCase
{
  public function testBasicTests() 
  {
      print("Test v1\n");
      $this->assertEquals(36, v1(1, 12));
      $this->assertEquals(483, v1(3, 69));
      $this->assertEquals(406, v1(3, 58));
      $this->assertEquals(513, v1(4, 57));
        
      print("Test u1\n");
      $this->assertEquals(28, u1(1, 14));
      $this->assertEquals(90, u1(4, 18));
        
  }
}
*/


function fact($num) { 
	$product = 1; 
	for ($i=1; $i<=$num; $i++) 
		$product*= $i; 
	return round($product); 
}

function u1($n, $p) {
	$result=0;
	for ($k=0; $k<=$n; $k++) { 
		$part=pow(-1, $k)*$p*pow(4, $n-$k);
		$abc=($n*2)-$k+1;
		$result= $result + ($part*((fact($abc))/(fact($abc-$k)*fact($k))));
	}
	return round($result);
}

function v1($n, $p) {
	$result=0;
	for ($k=0; $k<=$n; $k++) { 
		$part=pow(-1, $k)*$p*pow(4, $n-$k);
		$abc=($n*2)-$k;
		$result= $result + ($part*((fact($abc))/(fact($abc-$k)*fact($k))));
	}
	return round($result);
}