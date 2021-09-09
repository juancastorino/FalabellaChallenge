<?php
require './vendor/autoload.php';
 
use App\Controller\Welcome;
use App\Controller\Counter;

$controller = new Welcome();
if($_POST){
    $controller = new Counter(
        $_POST['start'], 
        $_POST['end'], 
        array(
            $_POST['replaceNumber1'] => $_POST['replaceText1'],
            $_POST['replaceNumber2'] => $_POST['replaceText2']
        ), 
        $_POST['commonMultipleText']);
}
$controller->initView();