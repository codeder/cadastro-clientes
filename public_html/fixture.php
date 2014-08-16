<?php
DEFINE("SRC", "../src/ES/");

/* Autoloader */
require_once SRC . 'Autoloader/SplClassLoader.php';
$loader = new SplClassLoader('ES', '../src');
$loader->register();

use ES\Connection\Conn;
use ES\Config\InsertDatabase;

$conn = new Conn;
$insert = new InsertDatabase($conn);
$insert->Persist();


?>

