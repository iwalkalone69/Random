<?php

include(__DIR__.'/../../src/iwalkalone/Random.php');

class randomTest extends \Codeception\Test\Unit
{
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testRandomDefault()
    {
        $str = \iwalkalone\Random::generate();
	$this->assertEquals(8, strlen($str));
	$this->assertEquals(true, preg_match("/^[A-Za-z0-9]+$/", $str));
    }

    public function testNumeric()
    {
        $str = \iwalkalone\Random::generate(10, 'n');
	$this->assertEquals(true, preg_match("/^[0-9]{10}$/", $str));
    }

    public function testLetter()
    {
        $str = \iwalkalone\Random::generate(24, 'A');
	$this->assertEquals(true, preg_match("/^[A-Z]{24}$/", $str));
        $str = \iwalkalone\Random::generate(12, 'a');
	$this->assertEquals(true, preg_match("/^[a-z]{12}$/", $str));
    }

    public function testAlphanumeric()
    {
        $str = \iwalkalone\Random::generate(18, 'An');
	$this->assertEquals(true, preg_match("/^[A-Z0-9]{18}$/", $str));
        $str = \iwalkalone\Random::generate(20, 'an');
	$this->assertEquals(true, preg_match("/^[a-z0-9]{20}$/", $str));
        $str = \iwalkalone\Random::generate(15, 'Aan');
	$this->assertEquals(true, preg_match("/^[A-Za-z0-9]{15}$/", $str));
    }
}
