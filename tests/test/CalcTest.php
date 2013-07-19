<?php
require_once(dirname(__FILE__). '/../src/calc.php');

class CalcTest extends PHPUnit_Framework_TestCase
{
    public function testcalc1(){
	$this->assertEquals(1,calc(1));
    }
    public function testcalc2(){
	$this->assertEquals(2,calc(2));
    }
    public function testcalc3(){
	$this->assertEquals(3,calc(3));
    }
    public function testcalc4(){
	$this->assertEquals(4,calc(4));
    }
}
