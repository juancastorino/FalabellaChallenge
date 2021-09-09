<?php

use PHPUnit\Framework\TestCase;

use App\Controller\Counter;
// require((__DIR__.'/../src/Controller/CounterController.php'));

class CounterTest extends TestCase
{
    public function testGenerateResults()
    {
        $counter = new Counter(1, 50);
        $result = $counter->initLoop();

        $this->assertIsArray($result);
        
        $this->assertSame(50, count($result));
        
    }

    public function testCreateCounterWithDefaultValues()
    {
        $counter = new Counter();
        $result = count($counter->initLoop());
        $this->assertSame(100, $result);
    }

    public function testValidateCommonMultipleReplace()
    {
        $counter = new Counter(3, 15);
        $result = $counter->initLoop()[15];
        $this->assertSame('Integracion', $result);
    }

    public function testStartGreaterThanEndParameter()
    {
        $counter = new Counter(3, 1);
        $arrayResult = $counter->initLoop();
        $this->assertSame(array('1' => '1', '2' => '2', '3' => 'Falabella'), $arrayResult);

        $count = count($arrayResult);
        $this->assertSame(3, $count);

    }

    public function testValidateFiveMultipleReplace()
    {
        $counter = new Counter(5, 5);
        $result = $counter->initLoop()[5];
        $this->assertSame('IT', $result);
    }

    public function testValidateThreeMultipleReplace()
    {
        $counter = new Counter(3, 3);
        $result = $counter->initLoop()[3];
        $this->assertSame('Falabella', $result);
    }
 
}