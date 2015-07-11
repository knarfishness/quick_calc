// src/AppBundle/Tests/Util/CalculatorTest.php
namespace AppBundle\Tests\Util;

use AppBundle\Util\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
	public function testAdd()
	{
	    $calc = new Calculator();
	    $result = $calc->getresultAction(30, 12, "+");

	    // assert that your calculator added the numbers correctly!
	    $this->assertEquals(42, $result);
	}

	public function testSub()
	{
		$calc = new Calculator();
		$result = $calc->getresultAction(30, 15, "-");

		// assert that your calculator added the numbers correctly!
		$this->assertEquals(15, $result);
	}

	public function testMult()
	{
		$calc = new Calculator();
		$result = $calc->getresultAction(30, 2, "*");

		// assert that your calculator added the numbers correctly!
		$this->assertEquals(60, $result);
	}

	public function testDivide()
	{
		$calc = new Calculator();
		$result = $calc->getresultAction(30, 3, "/");

		// assert that your calculator added the numbers correctly!
		$this->assertEquals(10, $result);
	}
}