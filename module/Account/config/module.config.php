<?php
return array(
    'doctrine' => array(
        'driver' => array(
            'User' => array(
                'class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(
                    0 => __DIR__ . '/../src/Account/Entity',
                ),
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Account\\Entity' => 'User',
                ),
            ),
        ),
    ),
    'router' => array(
        'routes' => array(
            'account.rest.user' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user[/:user_id]',
                    'defaults' => array(
                        'controller' => 'Account\\V1\\Rest\\User\\Controller',
                    ),
                ),
            ),
            'account.rpc.hello-world' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/hello',
                    'defaults' => array(
                        'controller' => 'Account\\V1\\Rpc\\HelloWorld\\Controller',
                        'action' => 'helloWorld',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'account.rest.user',
            1 => 'account.rpc.hello-world',
        ),
    ),
    'zf-rest' => array(
        'Account\\V1\\Rest\\User\\Controller' => array(
            'listener' => 'Account\\V1\\Rest\\User\\UserResource',
            'route_name' => 'account.rest.user',
            'route_identifier_name' => 'user_id',
            'collection_name' => 'user',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Account\\V1\\Rest\\User\\UserEntity',
            'collection_class' => 'Account\\V1\\Rest\\User\\UserCollection',
            'service_name' => 'User',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Account\\V1\\Rest\\User\\Controller' => 'HalJson',
            'Account\\V1\\Rpc\\HelloWorld\\Controller' => 'Json',
        ),
        'accept-whitelist' => array(),
        'content-type-whitelist' => array(),
        'accept_whitelist' => array(
            'Account\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/vnd.account.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Account\\V1\\Rpc\\HelloWorld\\Controller' => array(
                0 => 'application/vnd.account.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
        ),
        'content_type_whitelist' => array(
            'Account\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/vnd.account.v1+json',
                1 => 'application/json',
            ),
            'Account\\V1\\Rpc\\HelloWorld\\Controller' => array(
                0 => 'application/vnd.account.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Account\\V1\\Rest\\User\\UserEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'account.rest.user',
                'route_identifier_name' => 'user_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Account\\V1\\Rest\\User\\UserCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'account.rest.user',
                'route_identifier_name' => 'user_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(),
    ),
    'doctrine-hydrator' => array(),
    'zf-content-validation' => array(),
    'input_filter_specs' => array(),
    'service_manager' => array(
        'factories' => array(
            'Account\\V1\\Rest\\User\\UserResource' => 'Account\\V1\\Rest\\User\\UserResourceFactory',
        ),
    ),
    'controllers' => array(
        'factories' => array(
            'Account\\V1\\Rpc\\HelloWorld\\Controller' => 'Account\\V1\\Rpc\\HelloWorld\\HelloWorldControllerFactory',
        ),
    ),
    'zf-rpc' => array(
        'Account\\V1\\Rpc\\HelloWorld\\Controller' => array(
            'service_name' => 'HelloWorld',
            'http_methods' => array(
                0 => 'GET',
            ),
            'route_name' => 'account.rpc.hello-world',
        ),
    ),
);
