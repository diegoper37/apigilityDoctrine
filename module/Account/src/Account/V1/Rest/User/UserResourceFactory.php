<?php
namespace Account\V1\Rest\User;

class UserResourceFactory
{
    public function __invoke($services)
    {
        $objectManager = $services->get('doctrine.entitymanager.orm_default');
        $obj = new UserResource();
        $obj->setObjectManager($objectManager);
        return $obj;
    }
}
