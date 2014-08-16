<?php

use ES\Pessoa\Tipo\Fisica;
use ES\Pessoa\Tipo\Juridica;
use ES\Pessoa\Endereco;


$descPadrao = "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>";
$descPadrao .= "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>";


$clientes[0] = new Fisica(1, null, "Eder da Silva", "305.132.018.82", "Masculino");
$clientes[0]->setFoto("http://placehold.it/130x130");
$clientes[0]->setDescricao($descPadrao);
$clientes[0]->setPercentual(68);
$clientes[0]->setEnd(new Endereco("Durvalino de Castro, 25", "Cruzeiro", "SP"));
$clientes[0]->setEndCobranca(new Endereco("Rua Amador Costa e Souza, 31", "Cruzeiro", "SP"));


$clientes[1] = new Juridica(2, null, "Ednelson Prado ME", "Vincere Comunicação", "51.829.016/0001-42");
$clientes[1]->setFoto("http://placehold.it/130x130");
$clientes[1]->setDescricao($descPadrao);
$clientes[1]->setPercentual(30);
$clientes[1]->setEnd(new Endereco("Rua Livre das Flores, 58", "Lavrinhas", "SP"));
$clientes[1]->setEndCobranca(new Endereco("Mário das Flores, 38", "Taubaté", "SP"));



$clientes[2] = new Fisica(3, null, "Angela Maria de Abreu Oliveira", "888.888.888.88", "Feminino");
$clientes[2]->setFoto("http://placehold.it/130x130");
$clientes[2]->setDescricao($descPadrao);
$clientes[2]->setPercentual(59);
$clientes[2]->setEnd(new Endereco("Maurelino Vicentino Souza, 200", "Rio de Janeiro", "RJ"));
$clientes[2]->setEndCobranca(new Endereco("Valfredo Tomas Nóbrega, 71", "Rio de Janeiro", "RJ"));



$clientes[3] = new Juridica(4, null, "Solange Gomes ME", "Padaria São Carlos", "96.458.963/0001-25");
$clientes[3]->setFoto("http://placehold.it/130x130");
$clientes[3]->setDescricao($descPadrao);
$clientes[3]->setPercentual(85);
$clientes[3]->setEnd(new Endereco("Rua Juazeiro do Norte, 85", "Passa Quatro", "MG"));



$clientes[4] = new Fisica(5, null, "Florentina de Jesus", "999.999.999.99", "Feminino");
$clientes[4]->setFoto("http://placehold.it/130x130");
$clientes[4]->setDescricao($descPadrao);
$clientes[4]->setPercentual(40);
$clientes[4]->setEnd(new Endereco("Rua dos Conjolos Sumaré, 1000", "Baependí", "MG"));



$clientes[5] = new Fisica(6, null, "Luana Alves", "777.777.777.77", "Feminino");
$clientes[5]->setFoto("http://placehold.it/130x130");
$clientes[5]->setDescricao($descPadrao);
$clientes[5]->setPercentual(20);
$clientes[5]->setEnd(new Endereco("Rua Crispim Gonçalves", "Lavrinhas", "SP"));



$clientes[6] = new Juridica(7, null, "Luciana Mendes ME", "Software & CIA Ltda", "56.689.015/0001-66");
$clientes[6]->setFoto("http://placehold.it/130x130");
$clientes[6]->setDescricao($descPadrao);
$clientes[6]->setPercentual(100);
$clientes[6]->setEnd(new Endereco("Rua Zezé Valadão, 71", "Aparecida", "SP"));
$clientes[6]->setEndCobranca(new Endereco("Vila do Chaves, 71", "Tangamandápio", "SP"));



$clientes[7] = new Juridica(8, null, "Wesley Willians ME", "Code Education", "85.789.963/0001-63");
$clientes[7]->setFoto("http://placehold.it/130x130");
$clientes[7]->setDescricao($descPadrao);
$clientes[7]->setPercentual(60);
$clientes[7]->setEnd(new Endereco("Rua Tancredo Neves, 96", "São Paulo", "SP"));
$clientes[7]->setEndCobranca(new Endereco("Avenida Maria do Bairro, 80", "São Paulo", "SP"));



$clientes[8] = new Fisica(9, null, "Tiririca de Jesus", "589.874.569.56", "Masculino");
$clientes[8]->setFoto("http://placehold.it/130x130");
$clientes[8]->setDescricao($descPadrao);
$clientes[8]->setPercentual(48);
$clientes[8]->setEnd(new Endereco("Rua Margarida Oculta, 080", "Cabo Frio", "RJ"));



$clientes[9] = new Fisica(10, null, "Joaquim Alves", "456.874.563.85", "Masculino");
$clientes[9]->setFoto("http://placehold.it/130x130");
$clientes[9]->setDescricao($descPadrao);
$clientes[9]->setPercentual(97);
$clientes[9]->setEnd(new Endereco("Rua José Crispim Gonçalves", "Lavrinhas", "SP"));


?>
