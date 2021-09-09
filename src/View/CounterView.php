<?php

namespace App\View;

class CounterView
{
    protected $data;
    protected $html;
    protected $template;

    function __construct($template, $data = [] , $html = '')
    {
        $this->data = $data;
        $this->html = $html;
        $this->template = $template; 
    }

    function parseHtml($data)
    {
        $html = '';
        
        foreach ($data as $inputNumber => $afterModifiy) {
            $html .= "
            <tr>
                <td>$inputNumber</td>
                <td>$afterModifiy</td>
            <tr>
            ";
        }

        return $html;
    }

    function parseTemplate()
    {
        $this->html = file_get_contents($this->template);
 
        foreach ($this->data as $key => $value) {

            $this->html = str_replace("{{ $key }}",$this->parseHtml($value), $this->html);
        }
        
    }

    function render()
    {
        $this->parseTemplate();
         echo $this->html;
    }

}