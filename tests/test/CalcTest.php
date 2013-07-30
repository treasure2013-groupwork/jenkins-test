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
    public function testcalc5(){
	$this->assertEquals(5,calc(5));
    }
    public function testcalc6(){
	$this->assertEquals(6,calc(6));
    }
    public function testcalc7(){
	$this->assertEquals(7,calc(7));
    }
    public function testcalc8(){
	$this->assertEquals(8,calc(8));
    }
}
