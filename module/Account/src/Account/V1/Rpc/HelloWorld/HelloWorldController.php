<?php
namespace Account\V1\Rpc\HelloWorld;

use Zend\Mvc\Controller\AbstractActionController;

class HelloWorldController extends AbstractActionController
{
    public function helloWorldAction()
    {
        return ['msg' => 'hello world'];
    }
}
