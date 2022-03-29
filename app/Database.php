<?php
class Database
{
    static public $db = "simpsons.sqlite";
    static public $pdo = null;
    static public function connect()
    {
        if (self::$pdo === null) {
            self::$pdo = new PDO("sqlite:" . __DIR__ . "/../database/" . self::$db);
        }
        return self::$pdo;
    }
}
