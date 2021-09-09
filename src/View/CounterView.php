<?php

namespace App\View;
use App\Core\View;

class CounterView extends View
{

    function parseHtml(array $data): string
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

}