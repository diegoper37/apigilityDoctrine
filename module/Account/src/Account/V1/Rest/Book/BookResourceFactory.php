<?php
namespace Account\V1\Rest\Book;

class BookResourceFactory
{
    public function __invoke($services)
    {
        $objectManager = $services->get('doctrine.entitymanager.orm_default');
        $book = new BookResource();
        $book->setObjectManager($objectManager);
        return $book;
    }
}
