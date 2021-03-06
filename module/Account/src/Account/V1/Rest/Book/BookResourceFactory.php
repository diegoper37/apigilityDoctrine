<?php
namespace Account\V1\Rest\Book;

class BookResourceFactory
{
    public function __invoke($services)
    {
        $objectManager = $services->get('doctrine.entitymanager.orm_default');
        $obj = new BookResource();
        $obj->setObjectManager($objectManager);
        return $obj;
    }
}
