<?php
namespace Account\V1\Rpc\HelloWorld;

class HelloWorldControllerFactory
{
    public function __invoke($controllers)
    {
        return new HelloWorldController();
    }
}
