<?php

namespace Core;

use PDO;
use Chat\Config;

/**
 * Base model
 *
 * PHP version 7.0
 */
abstract class Model
{

    protected static $_instance;



    public static function getInstance() {
        if (!isset(static::$_instance)) {
            try {
                $dsn = 'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME;

                static::$_instance = new PDO($dsn, Config::DB_USER, Config::DB_PASSWORD);

            } catch (PDOException $e) {
                echo $e;
            }
        }
        return static::$_instance;
    }


}
