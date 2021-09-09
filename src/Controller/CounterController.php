<?php

namespace App\Controllers;

use App\View\CounterView;

class Counter
{
    protected $start;
    protected $end;
    protected $stringsToReplace;
    protected $commonMultiple;
    protected $allMultiplesFoundedText;
    
    
    public function __construct($start = 1, $end = 100, $stringsToReplace = array(3 => 'Falabella',5 => 'IT'), $commonMultipleText = 'Integracion')
    {
        $orderedInputs = $this->orderInputs($start, $end);
        $this->start = $orderedInputs[0];
        $this->end = $orderedInputs[1]; 

        $this->stringsToReplace = $stringsToReplace;
        $this->commonMultipleText = $commonMultipleText;
        $this->addCommonMultiple();
 
    }

    function initView() : void
    {
        $data = array(
            'numbersData' => $this->initLoop()
        );

        $view = new CounterView(__DIR__.'/../view/template/counter.php', $data);
        $view->render();
    }

    function initLoop() : array
    {
        $loop = [];
        for ($this->start; $this->start <= $this->end ; $this->start++) { 
            $loop[$this->start] = $this->parseNumber($this->start);
        }
        return $loop;
    }

    function orderInputs($start, $end) : array
    {
        //TODO: optimize when i can use more than 1 if
        $inputs= array('start' => $start, 'end' => $end);
        asort($inputs);
        $orderedInputs = [];
        foreach ($inputs as $key => $value) {
            $orderedInputs[] = $value;
        }

        return ($orderedInputs);
    }

    private function addCommonMultiple() : void
    {
        $this->commonMultiple = 1;
        foreach (array_keys($this->stringsToReplace) as $number) {
            $this->commonMultiple *= $number;
        }

        $this->stringsToReplace[$this->commonMultiple] = $this->commonMultipleText;
    }

    private function parseNumber($number) : string
    {
        $return = $number;

        foreach ($this->stringsToReplace as $divisor => $value) 
        {
          $module = $number % $divisor;
          if($module === 0)
          {
            $return = $this->stringsToReplace[$divisor];
          }
        }

        return $return;
        
    }
}
 

$start = $_POST['start'];
$end = $_POST['end'];
$replaces = array(
    $_POST['replaceNumber1'] => $_POST['replaceText1'],
    $_POST['replaceNumber2'] => $_POST['replaceText2']
);
$commonMultipleText = $_POST['commonMultipleText'];

$counter = new Counter($start, $end, $replaces, $commonMultipleText);
$counter->initView();

?>