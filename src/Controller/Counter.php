<?php

namespace App\Controller;

use App\View\CounterView;

class Counter
{
    protected $start;
    protected $end;
    protected $stringsToReplace;
    protected $commonMultiple;
    protected $allMultiplesFoundedText;
    
    /**
    * Counter constructor.
    * @param int $start
    * @param int $end
    * @param array $stringsToReplace
    * @param string $commonMultipleText
    */
    public function __construct
    (
        int $start = 1, 
        int $end = 100, 
        array $stringsToReplace = array(3 => 'Falabella',5 => 'IT'), 
        string $commonMultipleText = 'Integracion'
    )
    {
        $orderedInputs = $this->orderInputs(htmlspecialchars($start), htmlspecialchars($end));
        $this->start = $orderedInputs[0];
        $this->end = $orderedInputs[1]; 

        $this->stringsToReplace = $this->sanitizeStringsToReplace($stringsToReplace);
        $this->commonMultipleText = htmlspecialchars($commonMultipleText);
        $this->addCommonMultiple();
 
    }

    function initView() : void
    {
        $data = array(
            'numbersData' => $this->initLoop()
        );

        $view = new CounterView(__DIR__.'/../View/Template/counter.php', $data);
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

    /**
    * Sanitize Replace Customization by the users.
    * @param array $stringsToReplace
    */
    function sanitizeStringsToReplace(array $stringsToReplace):array 
    {
        $clean = [];
        foreach ($stringsToReplace as $key => $value) {
           $clean[htmlspecialchars($key)] = htmlspecialchars($value); 
        }
        return $clean;
    }

    /**
    * Order Inputs. Order Asc for params $start and $end
    * @param int $start
    * @param int $end
    */
    function orderInputs(int $start,int $end) : array
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

    /**
    * Add Common Multiple. Add to replaces array the common multiple value
    */
    private function addCommonMultiple() : void
    {
        $this->commonMultiple = 1;

        foreach (array_keys($this->stringsToReplace) as $number) {
            $this->commonMultiple *= $number;
        }

        $this->stringsToReplace[$this->commonMultiple] = $this->commonMultipleText;
    }

    /**
    * Parse Number. Replace numbers for text when it's needed
    * @param int $number
    */
    private function parseNumber(int $number) : string
    {
        $return = intval($number);

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

?>