<?php

namespace App\Repository;
use PDO;


class Database {

    public static function getConnection() {
        return new PDO("mysql:host=localhost;dbname=symfonydb", "root", "1234");
    }
}