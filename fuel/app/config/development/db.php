<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * -----------------------------------------------------------------------------
 *  Database settings for development environment
 * -----------------------------------------------------------------------------
 *
 *  These settings get merged with the global settings.
 *
 */

return [
    // MySQL ドライバの設定
    'default' => [
        'type'           => 'pdo',
        'connection'     => [
            'dsn'            => 'mysql:host=localhost;dbname=fuel_demo',
            'username'       => 'root',
            'password'       => '12345678',
            'persistent'     => false,
            'compress'       => false,
        ],
        'identifier'   => '`',
        'table_prefix'   => '',
        'charset'        => 'utf8',
        'enable_cache'   => true,
        'profiling'      => false,
    ],
];
