<?php
/**
 * Local Configuration Override
 *
 * This configuration override file is for overriding environment-specific and
 * security-sensitive configuration information. Copy this file without the
 * .dist extension at the end and populate values as needed.
 *
 * @NOTE: This file is ignored from Git by default with the .gitignore included
 * in ZendSkeletonApplication. This is a good practice, as it prevents sensitive
 * credentials from accidentally being committed into version control.
 */

return [
    // Whether or not to enable a configuration cache.
    // If enabled, the merged configuration will be cached and used in
    // subsequent requests.
    //'config_cache_enabled' => false,
    // The key used to create the configuration cache file name.
    //'config_cache_key' => 'module_config_cache',
    // The path in which to cache merged configuration.
    //'cache_dir' =>  './data/cache',
    // ...
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
                'doctrine_type_mappings' => [
                    'enum' => 'string'
                ],
                'params' => [
                    'host'     => 'mysql',
                    'port'     => '3306',
                    'user'     => 'root',
                    'password' => 'mypasswd',
                    'dbname'   => 'dbapp',
                    'charset'  => 'UTF8',
                    'driverOptions' => [1002 => 'SET NAMES utf8'],
                ]
            ],

        ],
        // now you define the entity manager configuration
        'entitymanager' => [
            'orm_default' => [
                'connection'    => 'orm_default',
                'configuration' => 'orm_default'
            ],

        ],
    ],
];
