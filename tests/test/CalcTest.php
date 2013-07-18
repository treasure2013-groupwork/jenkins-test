<?php
require_once(dirname(__FILE__). '/../src/calc.php');

class CalcTest extends PHPUnit_Framework_TestCase
{
    public function testcalc1(){
	$this->assertEquals(1,calc(1));
    }
}
