<?php
require 'vendor/autoload.php';
class StackTest extends PHPUnit_Framework_TestCase{
	public function testPushAndPop(){
		$stack = array('0');
		$this->assertEquals(0, count($stack));
		array_push($stack, 'foo');
		$this->assertEquals('f``oo', $stack[count($stack)-1]);
		$this->assertEquals(1, count($stack));
		$this->assertEquals('foo', array_pop($stack));
		$this->assertEquals(0, count($stack));
	}	
}