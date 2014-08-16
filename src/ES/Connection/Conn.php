<?php

namespace ES\Connection;

class Conn {

    public static $host = "localhost";
    public static $db = "codeeducation_cadastro";
    public static $user = "root";
    public static $pass = "storm1906";
    public static $drive = "mysql";
    

    public function Connect() {

        try {
            $connection = new \PDO("mysql:host=localhost;dbname=codeeducation_cadastro","root","storm1906");
            //echo self::$drive.":host=".self::$host.";dbname=".self::$db.",".self::$user.",".self::$pass;
            return $connection;
        } catch (\PDOException $e) {
            echo "Houve um erro: " . $e->getMessage();
        }
    }

}
