<?php

require_once("./EquilibriumIndex.php");

/**
 * I had to change the extends from PHPUnit_Framework_TestCase as it kept returning PHP errors
 * when I tried to run this with phpunit EquilibriumIndexTest.php. Just thought I'd document
 * that here in case you need to change it back. - VB
 */
class EquilibriumIndex extends \PHPUnit\Framework\TestCase
{
	public function testCase()
	{
		$arr = array(-7, 1, 5, 2, -4, 3, 0);
		$this->assertEquals(array(3,6), getEquilibriums($arr));
	}
}
