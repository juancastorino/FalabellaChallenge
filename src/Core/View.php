<?php

namespace App\Core;

class View
{
    protected $data;
    protected $html;
    protected $template;

    function __construct(string $template, array $data = [] , string $html = '')
    {
        $this->data = $data;
        $this->html = $html;
        $this->template = $template; 
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