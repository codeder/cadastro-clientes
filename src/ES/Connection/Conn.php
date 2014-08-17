<?php

namespace ES\Connection;

class Conn {

    public function Connect() {
        
        try {
            $connection = new \PDO(DRIVE.":host=". HOST .";dbname=".DB,USER,PASS);
            return $connection;
        } catch (\PDOException $e) {
            echo "Houve um erro: " . $e->getMessage();
        }
    }

}
