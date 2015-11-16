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
            'account.rest.doctrine.user-account' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/users[/:user_account_id]',
                    'defaults' => array(
                        'controller' => 'Account\\V1\\Rest\\UserAccount\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'account.rest.doctrine.user-account',
        ),
    ),
    'zf-rest' => array(
        'Account\\V1\\Rest\\UserAccount\\Controller' => array(
            'listener' => 'Account\\V1\\Rest\\UserAccount\\UserAccountResource',
            'route_name' => 'account.rest.doctrine.user-account',
            'route_identifier_name' => 'user_account_id',
            'entity_identifier_name' => 'id',
            'collection_name' => 'user_account',
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
            'entity_class' => 'Account\\Entity\\UserAccount',
            'collection_class' => 'Account\\V1\\Rest\\UserAccount\\UserAccountCollection',
            'service_name' => 'UserAccount',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Account\\V1\\Rest\\UserAccount\\Controller' => 'HalJson',
        ),
        'accept-whitelist' => array(
            'Account\\V1\\Rest\\UserAccount\\Controller' => array(
                0 => 'application/vnd.account.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content-type-whitelist' => array(
            'Account\\V1\\Rest\\UserAccount\\Controller' => array(
                0 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Account\\Entity\\UserAccount' => array(
                'route_identifier_name' => 'user_account_id',
                'entity_identifier_name' => 'id',
                'route_name' => 'account.rest.doctrine.user-account',
                'hydrator' => 'Account\\V1\\Rest\\UserAccount\\UserAccountHydrator',
            ),
            'Account\\V1\\Rest\\UserAccount\\UserAccountCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'account.rest.doctrine.user-account',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'doctrine-connected' => array(
            'Account\\V1\\Rest\\UserAccount\\UserAccountResource' => array(
                'object_manager' => 'doctrine.entitymanager.orm_default',
                'hydrator' => 'Account\\V1\\Rest\\UserAccount\\UserAccountHydrator',
            ),
        ),
    ),
    'doctrine-hydrator' => array(
        'Account\\V1\\Rest\\UserAccount\\UserAccountHydrator' => array(
            'entity_class' => 'Account\\Entity\\UserAccount',
            'object_manager' => 'doctrine.entitymanager.orm_default',
            'by_value' => true,
            'strategies' => array(),
            'use_generated_hydrator' => true,
        ),
    ),
    'zf-content-validation' => array(
        'Account\\V1\\Rest\\UserAccount\\Controller' => array(
            'input_filter' => 'Account\\V1\\Rest\\UserAccount\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Account\\V1\\Rest\\UserAccount\\Validator' => array(
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
        ),
    ),
);
