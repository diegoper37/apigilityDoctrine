<?php
namespace Account\V1\Rest\User;

class UserResourceFactory
{
    public function __invoke($services)
    {
        return new UserResource();
    }
}
