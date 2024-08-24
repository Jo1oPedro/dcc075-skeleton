<?php

namespace Security\BrokenAccessControl\Controllers;

use Security\BrokenAccessControl\Database\Connection;

abstract class Controller
{
    protected \PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::getConnection();
    }
}