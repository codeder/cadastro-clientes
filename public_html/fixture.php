<?php
DEFINE("SRC", "../src/ES/");

/* Autoloader */
require_once SRC . 'Autoloader/SplClassLoader.php';
$loader = new SplClassLoader('ES', '../src');
$loader->register();

use ES\Connection\Conn;
use ES\Config\InsertDatabase;

use ES\Person\Type\Fisica;
use ES\Person\Type\Juridica;
use ES\Person\Addresss\Address;


$conn = new Conn;
$insert = new InsertDatabase($conn);

$Client[0] = new Fisica(NULL, NULL, "Luana Alves", "305.132.018-82");
$Client[0]->SetAddress("Rua Aroldo", "36", "Lavrinhas", "SP");
$Client[0]->SetAddressBilling("Av Veronica Magela", "100", "Baependi", "Minas Gerais");
$Client[0]->setImage("http://placehold.it/130x130");
$Client[0]->setPercent(70);
$insert->Persist($Client[0]);
$insert->Flush();

$Client[1] = new Juridica(NULL, NULL, "Ednelson Prado ME", "99-999-999/0001-99");
$Client[1]->SetAddress("Rua Joaquina Barbosa", "88", "Rio de Janeiro", "RJ");
$Client[1]->setImage("http://placehold.it/130x130");
$Client[1]->setPercent(30);
$insert->Persist($Client[1]);
$insert->Flush();


?>

