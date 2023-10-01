<?php

namespace src\classes\Database;

use mysqli;

class Database
{
    protected $connection;

    function __construct()
    {
        $this->connection = new mysqli("localhost", "root", "", "bankingApp");
    }
}
