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
            'account.rest.ping' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/ping[/:ping_id]',
                    'defaults' => array(
                        'controller' => 'Account\\V1\\Rest\\Ping\\Controller',
                    ),
                ),
            ),
            'account.rest.doctrine.user' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user[/:user_id]',
                    'defaults' => array(
                        'controller' => 'Account\\V1\\Rest\\User\\Controller',
                    ),
                ),
            ),
            'account.rest.book' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/book[/:book_id]',
                    'defaults' => array(
                        'controller' => 'Account\\V1\\Rest\\Book\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            1 => 'account.rpc.hello-world',
            2 => 'account.rest.ping',
            0 => 'account.rest.doctrine.user',
            3 => 'account.rest.book',
        ),
    ),
    'zf-rest' => array(
        'Account\\V1\\Rest\\Ping\\Controller' => array(
            'listener' => 'Account\\V1\\Rest\\Ping\\PingResource',
            'route_name' => 'account.rest.ping',
            'route_identifier_name' => 'ping_id',
            'collection_name' => 'ping',
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
            'entity_class' => 'Account\\V1\\Rest\\Ping\\PingEntity',
            'collection_class' => 'Account\\V1\\Rest\\Ping\\PingCollection',
            'service_name' => 'Ping',
        ),
        'Account\\V1\\Rest\\User\\Controller' => array(
            'listener' => 'Account\\V1\\Rest\\User\\UserResource',
            'route_name' => 'account.rest.doctrine.user',
            'route_identifier_name' => 'user_id',
            'entity_identifier_name' => 'id',
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
            'entity_class' => 'Account\\Entity\\User',
            'collection_class' => 'Account\\V1\\Rest\\User\\UserCollection',
            'service_name' => 'User',
        ),
        'Account\\V1\\Rest\\Book\\Controller' => array(
            'listener' => 'Account\\V1\\Rest\\Book\\BookResource',
            'route_name' => 'account.rest.book',
            'route_identifier_name' => 'book_id',
            'collection_name' => 'book',
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
            'entity_class' => 'Account\\V1\\Rest\\Book\\BookEntity',
            'collection_class' => 'Account\\V1\\Rest\\Book\\BookCollection',
            'service_name' => 'Book',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Account\\V1\\Rpc\\HelloWorld\\Controller' => 'Json',
            'Account\\V1\\Rest\\Ping\\Controller' => 'HalJson',
            'Account\\V1\\Rest\\User\\Controller' => 'HalJson',
            'Account\\V1\\Rest\\Book\\Controller' => 'HalJson',
        ),
        'accept-whitelist' => array(
            'Account\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/vnd.account.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content-type-whitelist' => array(
            'Account\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/vnd.account.v1+json',
                1 => 'application/json',
            ),
        ),
        'accept_whitelist' => array(
            'Account\\V1\\Rpc\\HelloWorld\\Controller' => array(
                0 => 'application/vnd.account.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ),
            'Account\\V1\\Rest\\Ping\\Controller' => array(
                0 => 'application/vnd.account.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'Account\\V1\\Rest\\Book\\Controller' => array(
                0 => 'application/vnd.account.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Account\\V1\\Rpc\\HelloWorld\\Controller' => array(
                0 => 'application/vnd.account.v1+json',
                1 => 'application/json',
            ),
            'Account\\V1\\Rest\\Ping\\Controller' => array(
                0 => 'application/vnd.account.v1+json',
                1 => 'application/json',
            ),
            'Account\\V1\\Rest\\Book\\Controller' => array(
                0 => 'application/vnd.account.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Account\\V1\\Rest\\Ping\\PingEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'account.rest.ping',
                'route_identifier_name' => 'ping_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Account\\V1\\Rest\\Ping\\PingCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'account.rest.ping',
                'route_identifier_name' => 'ping_id',
                'is_collection' => true,
            ),
            'Account\\Entity\\User' => array(
                'route_identifier_name' => 'user_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'account.rest.doctrine.user',
                'hydrator' => 'Account\\V1\\Rest\\User\\UserHydrator',
            ),
            'Account\\V1\\Rest\\User\\UserCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'account.rest.doctrine.user',
                'is_collection' => true,
            ),
            'Account\\V1\\Rest\\Book\\BookEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'account.rest.book',
                'route_identifier_name' => 'book_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Account\\V1\\Rest\\Book\\BookCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'account.rest.book',
                'route_identifier_name' => 'book_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(
            'Account\\V1\\Rest\\User\\UserResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Account\\V1\\Rest\\User\\UserHydrator',
            ),
        ),
    ),
    'doctrine-hydrator' => array(
        'Account\\V1\\Rest\\User\\UserHydrator' => array(
            'entity_class' => 'Account\\Entity\\User',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
    ),
    'zf-content-validation' => array(
        'Account\\V1\\Rest\\User\\Controller' => array(
            'input_filter' => 'Account\\V1\\Rest\\User\\Validator',
        ),
        'Account\\V1\\Rest\\Book\\Controller' => array(
            'input_filter' => 'Account\\V1\\Rest\\Book\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Account\\V1\\Rest\\User\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => 200,
                        ),
                    ),
                ),
            ),
            1 => array(
                'name' => 'username',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => 200,
                        ),
                    ),
                ),
            ),
        ),
        'Account\\V1\\Rest\\Book\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => '3',
                        ),
                    ),
                ),
                'filters' => array(),
                'name' => 'name',
                'description' => 'Nome do livro',
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'Account\\V1\\Rest\\Ping\\PingResource' => 'Account\\V1\\Rest\\Ping\\PingResourceFactory',
            'Account\\V1\\Rest\\Book\\BookResource' => 'Account\\V1\\Rest\\Book\\BookResourceFactory',
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
