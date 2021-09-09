<?php

namespace App\Controller;

use App\View\CounterView;

class Welcome
{

    function initView() : void
    {
        $view = new CounterView(__DIR__.'/../View/Template/welcome.php');
        $view->render();
    }

}

?>