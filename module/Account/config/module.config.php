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
);