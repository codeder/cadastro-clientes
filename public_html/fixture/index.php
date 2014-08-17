<?php

require_once("db.php");

DEFINE("SRC", "../../src/ES/");

/* Autoloader */
require_once SRC . 'Autoloader/SplClassLoader.php';
$loader = new SplClassLoader('ES', '../../src');
$loader->register();

use ES\Connection\Conn;
use ES\Config\InsertDatabase;
use ES\Person\Type\Fisica;
use ES\Person\Type\Juridica;
use ES\Person\Addresss\Address;

try {
    $t = new \PDO("mysql:host=" .HOST, USER, PASS);
    $t->exec("

CREATE DATABASE  IF NOT EXISTS `codeeducation_cadastro` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `codeeducation_cadastro`;
DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `razao_social` varchar(255) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `number` varchar(10) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `billing_address` varchar(255) DEFAULT NULL,
  `billing_number` varchar(10) DEFAULT NULL,
  `billing_city` varchar(45) DEFAULT NULL,
  `billing_uf` varchar(2) DEFAULT NULL,
  `percent` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
") or die(print_r($conn->errorInfo(), true));
} catch (\PDOException $e) {
    die("Erro: " . $e->getMessage());
}

$conn = new Conn;
$insert = new InsertDatabase($conn);

$client[0] = new Fisica(NULL, NULL, "Luana Alves", "523.789.963-87");
$client[0]->SetAddress("Rua Aroldo", "36", "Lavrinhas", "SP");
$client[0]->SetAddressBilling("Av Veronica Magela", "100", "Baependi", "MG");
$client[0]->setImage("http://placehold.it/130x130");
$client[0]->setPercent(70);
$insert->Persist($client[0]);
$insert->Flush();

$client[1] = new Juridica(NULL, NULL, "Ednelson Prado ME", "99-999-999/0001-99");
$client[1]->SetAddress("Rua Joaquina Barbosa", "88", "Rio de Janeiro", "RJ");
$client[1]->setImage("http://placehold.it/130x130");
$client[1]->setPercent(30);
$insert->Persist($client[1]);
$insert->Flush();

$client[2] = new Fisica(NULL, NULL, "Angela Maria de Abreu", "666.999.589-99");
$client[2]->SetAddress("Rua Amador Costa e Souza", "31", "Cruzeiro", "SP");
$client[2]->SetAddressBilling("Rua José Ariovaldo", "26", "Baependi", "MG");
$client[2]->setImage("http://placehold.it/130x130");
$client[2]->setPercent(100);
$insert->Persist($client[2]);
$insert->Flush();

$client[3] = new Juridica(NULL, NULL, "Moveis Tubulares ME", "88-888-963/0001-99");
$client[3]->SetAddress("Rua Tiririca de Jesus", "88", "Lorena", "SP");
$client[3]->setImage("http://placehold.it/130x130");
$client[3]->setPercent(40);
$insert->Persist($client[3]);
$insert->Flush();

$client[4] = new Fisica(NULL, NULL, "Ariane Fonseca", "852.369.789-85");
$client[4]->SetAddress("Rua Crispim Paulo", "88", "Meoma", "SP");
$client[4]->SetAddressBilling("Av Costa Paulo", "88", "Passa Quatro", "MG");
$client[4]->setImage("http://placehold.it/130x130");
$client[4]->setPercent(20);
$insert->Persist($client[4]);
$insert->Flush();
?>

