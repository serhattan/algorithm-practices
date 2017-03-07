<?

/*Write a function generateIntegers/generate_integers that accepts two arguments m/$m and n/$n and generates an array containing the integers from m to n inclusive.

For example, generateIntegers(2, 5)/generate_integers(2, 5) should return [2, 3, 4, 5].

m/$m and n/$n can be any integers greater than or equal to 0.

n/$n will always be greater than or equal to m/$m.

class GenerateIntegersTest extends TestCase {
  public function testDescriptionExample() {
    $this->assertEquals([2, 3, 4, 5], generate_integers(2, 5));
  }
}*/

var_dump(generate(2,5));

function generate($m,$n){
	return range($m, $n);
}