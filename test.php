<?php
use PHPUnit\Framework\TestCase;

include 'index.php';

/* class OutputTest extends TestCase
{
    public function testExpectCtoF()
    {
		$c15= new temprature(15);
        $this->expectOutputString($c15->get_f());
        print '59';
    }

    public function testExpectFtoC()
    {
		$f78= new temprature();
        $this->expectOutputString($f78->convert_f2c(78));
        print '26';
    }
	
	public function testExpectDefaultTemprature()
	{
		$default = new temprature();
		$this->assertSame(32,$default->get_f());
	}
} */

class DataTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testCtoF($c, $f)
    {
		$temprature= new temprature($c);
        $this->assertSame($temprature->get_f(), round($f,2));
    }

    public function additionProvider()
    {
        return [
            [0,32],
            [28,82.40],
            [100,212],
            [-5,23]
        ];
    }
}