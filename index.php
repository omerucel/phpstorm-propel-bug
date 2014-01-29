<?php

include_once 'vendor/autoload.php';

$dbname = 'book_store';
$plaftorm = 'mysql';
$dsn = 'mysql:host=127.0.0.1;dbname=book_store;charset=utf8';
$username = 'root';
$password = '';

/**
 * Setting stuff
 */
$serviceContainer = \Propel\Runtime\Propel::getServiceContainer();
$serviceContainer->setAdapterClass($dbname, 'mysql');
$manager = new \Propel\Runtime\Connection\ConnectionManagerSingle();
$manager->setConfiguration(
    array(
        'dsn'      => $dsn,
        'user'     => $username,
        'password' => $password,
    )
);
$serviceContainer->setConnectionManager($dbname, $manager);

/**
 * Auto complete fails
 */
\Application\Entity\BookQuery::create()->;
