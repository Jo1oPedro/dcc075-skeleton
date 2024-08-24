<?php

namespace Security\BrokenAccessControl\Database;

class Connection
{
    private static \PDO|null $pdo = null;
    private function __construct() {}

    public static function getConnection(): \PDO
    {
        if(self::$pdo === null) {
            if(is_null(self::$pdo)) {
                self::$pdo = new \PDO('mysql:host=banco_de_dados;dbname=broken-access-control', 'user', 'secret');
            }
        }
        return self::$pdo;
    }
}